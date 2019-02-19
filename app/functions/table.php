<?php


/* 
 * Copyright (C) 2016 majidhameedkhan
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

if (isset($_POST['table']) && isset($_POST['range'])) {

    $table = $_POST['table'];
    $range = $_POST['range'];

    echo ResponseTable($table, $range);
    /*
      $tableCreationResult = createTable($table, $range);
      createTableView($tableCreationResult);

     */
}
/**
 * Function to create digit tables in form of String
 * @param integer $table
 * @param integer $range
 * @return string
 */
function ResponseTable($table, $range) {
    $data = '';                                                             // initialize variable $data (empty)
    $tablesView = '';                                                       // initialize variable $allTableViews (empty)
    for ($rangecount = 2; $rangecount <= $table; $rangecount ++) {          // loop for range count
        for ($limitcount = 1; $limitcount <= $range; $limitcount++) {       // loop for limit count
            $data .= '&emsp;' . $rangecount . ' x ' . $limitcount;          // adding first bit of table in data e.g 2 x 1
            $data .= ' = ' . $rangecount * $limitcount . '<br>';            // adding second bit of table in data e.g = 2 [full data is 2 x 1 = 2]
        }   // nested for end     

        $tablesView .= "<div class=' alert alert-info ";                    // created div using bootstrap csss classes first bit
        $tablesView .= "col-sm-2 col-xs-offset-0'>";                        // div's second bit
        $tablesView .= "<h4> Table of " . $rangecount . '</h4><hr>';        // adding title of Table e.g Table of 3
        $tablesView .= $data;                                               // adding full one tabe to view (div)
        $tablesView .= "</div>";                                            // closing view (div>
        $data = '';                                                         // empty data for next table
    }   // outer for end
    return $tablesView;                                                     // return all divs back to calling function.
}


/**
 * Function to create digit tables in form of an Array
 * @param integer $table
 * @param integer $range
 */

/*  Function below is commented out as we are not using array at the moment 
 
function createTableArray($table, $range) {
    
    

    $tableview[] = '';
    $allTablesView[] = '';
    for ($rangecount = 2; $rangecount <= $table; $rangecount ++) { // loop for range count
        for ($limitcount = 1; $limitcount <= $range; $limitcount++) { // loop for limit count
            $tableview[] .= $rangecount . ' x ' . $limitcount . ' = ' . $rangecount * $limitcount . '<br>';
        }// nested for end
        $limitcount = 1;
        $allTablesView[] = $tableview;
        $tableview = '';
    }// outer for end    
    return $allTablesView;
}

 */

