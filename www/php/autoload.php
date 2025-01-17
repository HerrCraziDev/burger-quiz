<?php
session_start();

require_once(__DIR__ . '/config.php');

require_once(__DIR__ . '/UserException.class.php');
require_once(__DIR__ . '/UserManagerException.class.php');
require_once(__DIR__ . '/PartieException.class.php');
require_once(__DIR__ . '/QuestionException.class.php');
require_once(__DIR__ . '/ThemeException.class.php');
require_once(__DIR__ . '/PartiesManagerException.class.php');
require_once(__DIR__ . '/ScoreException.class.php');
require_once(__DIR__ . '/ScoresManagerException.class.php');

require_once(__DIR__ . '/Database.class.php');
require_once(__DIR__ . '/User.class.php');
require_once(__DIR__ . '/UserManager.class.php');
require_once(__DIR__ . '/Proposition.class.php');
require_once(__DIR__ . '/Question.class.php');
require_once(__DIR__ . '/Score.class.php');
require_once(__DIR__ . '/Theme.class.php');
require_once(__DIR__ . '/Partie.class.php');
require_once(__DIR__ . '/PartiesManager.class.php');
require_once(__DIR__ . '/ScoresManager.class.php');

require_once(__DIR__ . '/functions.php');
