<?php
	session_start();

    abstract class CommonAction {
        protected static $VISIBILITY_PUBLIC = 0;
        protected static $VISIBILITY_MEMBER = 1;
        protected static $VISIBILITY_MODERATOR = 2;
        protected static $VISIBILITY_ADMINISTRATOR = 3;

        private $pageVisibility;

        public function __construct($pageVisibility) {
            $this->pageVisibility = $pageVisibility;
        }

        public function execute() {
            if (!empty($_GET["logout"])) {
                session_unset();
                session_destroy();
                session_start();
            }

            if (empty($_SESSION["visibility"])) {
                $_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
            }

            if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location: login.php");
				exit;
			}

            // Design pattern : Template method
            $data = $this->executeAction();
            $data["username"] = $_SESSION["username"] ?? "Invité";
            $data["isSignedIn"] = $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;

            return $data;
        }

        abstract protected function executeAction();
    }