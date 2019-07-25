<h1>Add <a href="/crud/addForm">Item<a></h1>
<p>
<?
// var_dump($data);

foreach($data as $key => $value){
    // echo $key;
    echo $value["name"];
    echo " <a href='/crud/editForm?id=".$value["id"]."&name=".$value["name"]."'>Update</a> ";
    echo "<a href='/crud/delItem?id=".$value["id"]."'>Delete</a>";
    echo "<br>";
}
?>
<p>