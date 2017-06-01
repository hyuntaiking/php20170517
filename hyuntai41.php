<?php
include 'sqlOpendata.php';
$json = file_get_contents('http://data.coa.gov.tw/Service/OpenData/DataFileService.aspx?UnitId=102');
$root = json_decode($json);
foreach ($root as $row) {
    echo "{$row->number}:{$row->name}<br>";
    $number        = $row->number;
    $name          = $row->name;
    $level         = $row->level;
    $system        = $row->system;
    $second_system = $row->second_system;
    $manager       = $row->manager;
    $entrance      = $row->entrance;

    $sql = "insert into road (number,name,level,system,second_system,manager,entrance) values (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$number,$name,$level,$system,$second_system,$manager,$entrance]);
//    echo $stmt->errorCode() . "<br>";
//    echo $stmt->errorInfo() . "<br>";
}
//$json = '{"id":"123",
//        "name": "brad",
//        "lang": [
//            {"name":"Java",
//             "level": "1"
//            },
//            {"name":"PHP",
//             "level": "2"
//            },
//            {"name":"Android",
//             "level": "3"
//            },
//            {"name":"iOS",
//             "level": "4"
//            }
//        ]}';
//$root = json_decode($json);
//foreach ($root->lang as $lang) {
//    echo "{$lang->name}:{$lsng->level}";
//}
