<div class="button">
      <a><?php
                $sql = "SELECT * FROM `tbltitle` WHERE TItleID=1";
                 $mydb->setQuery($sql);
                $viewTitle = $mydb->loadSingleResult();
                echo $viewTitle->Title;
            ?></a>
    </div><!-- button -->