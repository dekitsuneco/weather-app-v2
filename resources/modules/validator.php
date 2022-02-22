<?php
  function isValid($rawApiData) {
    if (isset($rawApiData['error'])) {
      return false;
    }

    return true;
  }
?>