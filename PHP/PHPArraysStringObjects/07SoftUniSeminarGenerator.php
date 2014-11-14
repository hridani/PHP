<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
      
    body{
        margin:0;
        padding: 0;
    }
    
    #wrapper{
        width:100%;
    }
        .labelform{
            background-color: #D9D9D9;
            height:25px;
            width:100%;
            text-align:center;
            font-size: 18px;
       }
        form {
            width:80%;
            border:1px solid black;
            margin:0 auto;
        }
        form table{
            border:1px solid gray;
            width:96%;
            margin:10px auto;
            border-collapse: collapse;
            
        }
        table thead {
            margin:10px auto;
            height:20px;
           
        }
        tr#bb {
            border-bottom: 3px solid black;
            margin-bottom: 5px;
        }
        table thead tr th{
            text-align:left;
        }
        table tbody tr td{
            border:1px solid gray;
            margin-right: 5px;
            height:30px;
        }
        
        input[type='button']{
            width:30px;
            height:27px;
            background-color: #234465;
            color:white;
            margin-left: 20px;
            text-align:center;
        }
        input[type='submit']{
            width:150px;
            height:27px;
            background-color: #234465;
            color:white; 
        }
        input[type='text'],input[type='number']{
           width=20%;
            height:27px;
           border:1px solid gray;
           margin:10px;
           padding-left: 10px;
           
        }
        #wrapResult{
            width:100%;
            
        }
        #result{
            width:80%;
            border:1px solid black;
            margin:10px auto;
            
        }
        #restable{
            width:60%;
            border:1;
            margin:0 auto;
        }
        #restable thead{
            background-color:#1E90FF;
        }
        #restable th{
             text-align:center;
        }
        #restable td{
             text-align:left;
             padding-left: 5px;
        }
  
    </style>
</head>
<body>
    <div id=wrapper>
<form method="post" action="">
    
    <textarea name="text" rows="10" cols="80">Debugging with WordPress-Mario Peshev-28-08-2014 18:00 WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL... 
First steps with Laravel-Ivan Vankov-31-08-2014 19:00 Laravel is a free, open source PHP web application framework, designed for the development of model–view–controller (MVC) web applications. According to...
JavaScript with .NET-Pavel Kolev-12-09-2014 17:00 JavaScript (JS) is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously...
SEO optimization, social networks, digital marketing-Ognyan Mladenov-05-07-2014 18:00 Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a search engine's "natural" or un-paid ("organic") search results. In general, the earlier (or higher ranked on the search results page), and more frequently...
Basic Game Theory-Georgi Georgiev-16-06-2014 15:00 Game theory is a study of strategic decision making. Specifically, it is "the study of mathematical models of conflict and cooperation between intelligent rational decision-makers". An alternative term suggested "as a more descriptive name for the discipline" is interactive decision theory. Game theory is mainly used in economics...
</textarea>

        <label for="sortby">Sort by:</label>
            <select name="sortby" id="sortby"  requared >
                <option value="name" selected>Name</option>
                <option value="date">Date</option>
                
           </select>
            <label for="order">Order:</label>
            <select name="order" id="order"  requared >
                <option value="asc" selected >Ascending</option>
                <option value="des">Descending</option>
            </select>
            
            <input type="submit" value="Submit" />
    
</form>
</div>
</body>
</html>

<?php
date_default_timezone_set('UTC');
const DATE_FORMAT = "d-m-Y H:i";
if (isset ($_POST['text'])) {
    $text=$_POST['text'];
    
    function aasort (&$array, $key, $order) {
            $sorter=array();
            $ret=array();
            reset($array);
            
            foreach ($array as $ii => $va) {
                $sorter[$ii]=$va[$key];
            }
            if($order==='asc')
                 asort($sorter);
            else
                arsort($sorter);
            foreach ($sorter as $ii => $va) {
                $ret[$ii]=$array[$ii];
        }
        $array=$ret;
    }
    preg_match_all('/(.*?)-(.*?)-(\d{1,2}-\d{1,2}-\d{4} \d{1,2}:\d{1,2}) (.*)/',$text,$records,PREG_SET_ORDER);
    
    $seminar=[];
    for($i=0; $i < count($records); $i++)
    {
        $seminar[$i]['name'] =$records[$i][1];
        $seminar[$i]['lname'] =$records[$i][2];
        $seminar[$i]['date'] = strtotime($records[$i][3]);//strtotime($records[$i][3]->format("d-m-Y H:i"));
        $seminar[$i]['dec'] =$records[$i][4];
    }
    var_dump($seminar);
    $key=$_POST['sortby'];
    $order=$_POST['order'];
    aasort($seminar,$key,$order);
    
    $result='<div id="wrapResult"><div id="result"><div class="labelform">Result</div><table id="restable"><thead >
                    <tr><th>Seminar name</th><th>Date</th><th>Participate</th>Y
                    </tr></thead><tbody>';
    foreach ($seminar as $oneseminar) {
        $result .= "<tr><td>". $oneseminar['name'] ."</td>";
        $result .= "<td>". date("d-m-Y H:I",$oneseminar['date']) ."</td>";
        $result .= '<td> <input type="submit" value="SIGN UP" /></td>';
       
   
    }
    $result .= '</tbody></table></div></div>';
    echo $result;
    //var_dump($seminar);
}
    
    ?>
