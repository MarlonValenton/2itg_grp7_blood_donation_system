<!DOCTYPE html>
<html>
  <head>
    <title>Calendar Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- ANDROID + CHROME + APPLE + WINDOWS APP -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="white">
    <link rel="apple-touch-icon" href="icon-512.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Calendar">
    <meta name="msapplication-TileImage" content="icon-512.png">
    <meta name="msapplication-TileColor" content="#ffffff">

    <!-- WEB APP MANIFEST -->
    <!-- https://web.dev/add-manifest/ -->
    <link rel="manifest" href="5-manifest.json">

    <!-- SERVICE WORKER -->
    <script>
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("5-worker.js");
    }
    </script>

    <!-- JS + CSS -->
    <script src="4b-calendar.js"></script>
    <link rel="stylesheet" href="4c-calendar.css">
  </head>
  <body>
    <?php
    // (A) DAYS MONTHS YEAR
    $months = [
      1 => "January", 2 => "Febuary", 3 => "March", 4 => "April",
      5 => "May", 6 => "June", 7 => "July", 8 => "August",
      9 => "September", 10 => "October", 11 => "November", 12 => "December"
    ];
    $monthNow = date("m");
    $yearNow = date("Y"); ?>

    <!-- (B) PERIOD SELECTOR -->
    <div id="calHead">
      <div id="calPeriod">
        <input id="calBack" type="button" class="mi" value="&lt;">
        <select id="calMonth"><?php foreach ($months as $m=>$mth) {
          printf("<option value='%u'%s>%s</option>",
            $m, $m==$monthNow?" selected":"", $mth
          );
        } ?></select>
        <input id="calYear" type="number" value="<?=$yearNow?>">
        <input id="calNext" type="button" class="mi" value="&gt;">
      </div>
      <input id="calAdd" type="button" value="+">
    </div>

    <!-- (C) CALENDAR WRAPPER -->
    <div id="calWrap">
      <div id="calDays"></div>
      <div id="calBody"></div>
    </div>

    <!-- (D) EVENT FORM -->
    <dialog id="calForm"><form method="dialog">
      <div id="evtCX">X</div>
      <h2 class="evt100">CALENDAR EVENT</h2>
      <div class="evt50">
        <label>Start</label>
        <input id="evtStart" type="datetime-local" required>
      </div>
      <div class="evt50">
        <label>End</label>
        <input id="evtEnd" type="datetime-local" required>
      </div>
      <div class="evt50">
        <label>Text Color</label>
        <input id="evtColor" type="color" value="#000000" required>
      </div>
      <div class="evt50">
        <label>Background Color</label>
        <input id="evtBG" type="color" value="#ffdbdb" required>
      </div>
      <div class="evt100">
        <label>Event</label>
        <input id="evtTxt" type="text" required>
      </div>
      <div class="evt100">
        <input type="hidden" id="evtID">
        <input type="button" id="evtDel" value="Delete">
        <input type="submit" id="evtSave" value="Save">
      </div>
    </form></dialog>
  </body>
</html>