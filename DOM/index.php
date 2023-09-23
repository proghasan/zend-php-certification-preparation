<?php

$users = [
    ['name' => 'Hasan Sheikh', 'age' => 27, 'address'=> '674/3 East Monipur Mirpur'],
    ['name' => 'James bond', 'age' => 30, 'address' =>'Unknow'],
];


$doc = new DOMDocument("1.0", "utf-8");

// html tag
$root = $doc->createElement("html");
$root = $doc->appendChild($root);


// head tag
$head = $doc->createElement("head");
$head = $root->appendChild($head);

// tite tag 
$title = $doc->createElement("title", "Make take using dom");
$title = $head->appendChild($title);

// body tag

$body = $doc->createElement('body');

$body = $root->appendChild($body);

// table creation
$table = $doc->createElement('table');
$table = $body->appendChild($table);

// table head
$thead = $doc->createElement('thead');
$thead = $table->appendChild($thead);

$theadTr = $doc->createElement('tr');
$theadTr = $thead->appendChild($theadTr);

$theadTh = $doc->createElement('th', 'Name');
$theadTh = $theadTr->appendChild($theadTh);

$theadTh = $doc->createElement('th', 'Age');
$theadTh = $theadTr->appendChild($theadTh);

$theadTh = $doc->createElement('th', 'Address');
$theadTh = $theadTr->appendChild($theadTh);


// table body
$tbody = $doc->createElement('tbody');
$tbody = $table->appendChild($tbody);


foreach($users as $user) {
    $tbodyTr = $doc->createElement('tr');
    $tbodyTr = $tbody->appendChild($tbodyTr);
    
    $tbodyTd = $doc->createElement('td', $user['name']);
    $tbodyTd = $tbodyTr->appendChild($tbodyTd);
    
    $tbodyTd = $doc->createElement('td', $user['age']);
    $tbodyTd = $tbodyTr->appendChild($tbodyTd);
    
    $tbodyTd = $doc->createElement('td', $user['address']);
    $tbodyTd = $tbodyTr->appendChild($tbodyTd);
}


echo $doc->saveHTMLFile("table.html");
