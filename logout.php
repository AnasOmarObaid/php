<?php

 // start the session
 session_start();

 // unset the session
 session_unset();

 // destroy the session
 session_destroy();

 print_r($_SESSION);