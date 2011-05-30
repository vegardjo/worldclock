<?php 

$svalbard = new DateTime("now", new DateTimeZone('Arctic/Longyearbyen'));
$svalbardtime = $svalbard->format("H:i");
$svalbarddate = $svalbard->format("D d.m.Y");

$troll = new DateTime("now", new DateTimeZone('Antarctica/Casey'));
$trolltime = $troll->format("H:i");
$trolldate = $troll->format("D d.m.Y");

$tromso = new DateTime("now", new DateTimeZone('Europe/Warsaw'));
$tromsotime = $tromso->format("H:i");
$tromsodate = $tromso->format("D d.m.Y");
 
$dubai = new DateTime("now", new DateTimeZone('Asia/Dubai'));
$dubaitime = $dubai->format("H:i"); 
$dubaidate = $dubai->format("D d.m.Y"); 

$singapore = new DateTime("now", new DateTimeZone('Asia/Singapore'));
$singaporetime = $singapore->format("H:i");
$singaporedate = $singapore->format("D d.m.Y");

?>

<style>
table.worldclock {
  font-family: helvetica;
}

table.worldclock td {
  padding: 0 5px;
}


table.worldclock span {
  display: block;
  color: gray;
  text-align: center;
}

table.worldclock span.place {
  text-transform: uppercase;
  clear: both;
}

table.worldclock span.time {
  font-size: 150%;
  padding: 5px;
  background: #eee;
  color: black;
  clear: both;
  border-top: solid 2px gray;
  border-left: solid 2px gray;
  border-bottom: solid 1px gray;
  border-right: solid 1px gray; 
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

table.worldclock span.date {
  font-size: 80%;
}

</style>

<table class="worldclock">
  <tr>
    <td>
      <span class="place">
        Svalbard
      </span>
      
      <span class="time">
        <?php print $svalbardtime?>
      </span>
      
      <span class="date">
        <?php print $svalbarddate?>
      </span>
    </td>

    <td>
      <span class="place">
        Tromsø
      </span>
      
      <span class="time">
        <?php print $tromsotime?>
      </span>
      
      <span class="date">
        <?php print $tromsodate?>
      </span>      
    </td>

    <td>
      <span class="place">
        Troll (Casey)
      </span>
      
      <span class="time">
        <?php print $trolltime?>
      </span>
      
      <span class="date">
        <?php print $trolldate?>
      </span>      
    </td>


    <td>
      <span class="place">
        Singapore
      </span>
      
      <span class="time">
        <?php print $singaporetime?>
      </span>
      
      <span class="date">
        <?php print $singaporedate?>
      </span>
      
    </td>

    <td>
      <span class="place">
        Dubai
      </span>
      
      <span class="time">
        <?php print $dubaitime?>
      </span>
      
      <span class="date">
        <?php print $dubaidate?>
      </span>
      
    </td>



  </tr>
</table>
  
<?php 
// $troll (antarctica)
// $svalbard (tromso?)
 
;?>