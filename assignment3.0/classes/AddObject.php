<?php

abstract class Connect{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername = "localhost";
        $this->username = "Martins";
        $this->password = "Kiochader123";
        $this->dbname = "product_list";
    
        $conn = new mysqli($this->servername, $this->username,
        $this->password, $this->dbname);

        return $conn;
    }
}

abstract class Item extends Conct{

    public $name;
    public $price;

    public function __set($name, $price){ 
        $this->name = $name;
        $this->price = $price;
    }
    public function addItem($item,$parameter){
        $add ="INSERT INTO $item (`NAME`, `PRICE`, $parameter) 
        VALUES ('$this->name', '$this->price', '$this->$parameter')";
        return $add;
    }
    public function __get($item){
        $sql = "SELECT * FROM $item";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return '0';
        }
    }
    public function dataPrint($pName, $index, $unit){
        return $pName.": ".$index.$data[$pName].$unit."<br>";
    }
    public function dataReturn(){
        return '$data["SKU"]';
    }
    public function showAllData($item, $index, $parameter, $unit){
        $datas = $this->getData($item);
        if ($datas != 0){
            foreach($datas as $data){
                ?>
                <div class = bloks style = " background-color: rgb(193, 253, 186);">;
                    <div id = "<?php echo dataReturn();?>" class = "bloks2 ">
                        <?php
                            echo dataPrint('SKU', $index, $unit);
                            echo dataPrint('NAME','','');
                            echo dataPrint('PRICE','','$');
                            echo dataPrint($parameter,'',$unit);
                        ?>
                    </div>
                    <input type = "checkbox" class = "button" name = "num{$index}[]" value = "<?php echo dataReturn();?>"/>
                </div>
                <?php      
            }
        }
        if(isset($_POST['num{$index}'])){
            $box = $_POST['num{$index}'];
            $conn = $this->connect();

            foreach($box as $key=>$value){
                $del = "DELETE FROM dvd WHERE SKU= $value";
                if (!mysqli_query($conn, $del)) {
                    echo "Error deleting DVD record: " . mysqli_error($conn);
                }
            }
        }
    }
    public function formShow($windowID, $parameter, $name, $info){
        ?>
        <form id = "product_form" style = "margin: 10px" action = "product_add.php" method = "POST">

        <div style="width:210px">
        Name :<input class = "inputStyle" type="text" name="fname">
        <br>
        Price :<input class = "inputStyle" type="text" name="fprice">
        <br>
        </div>

        <div class = "largeWindow">
            <div class = "window" id = "<?php echo $windowID ?>">
                <?php echo $parameter ?> :<input class = "inputStyle" type="text" name="<?php echo $name ?>">
                <div class = "smallerWindow">
                <p class = "warning">Important!</p>
                <p class = "warningText"><?php echo $info ?></p>
                </div>
            </div>
        </div>
        <input style = "margin: 10px" type= "submit" name = "submit1">
        </form>
        <?php
    }
}

class Dvd extends Item{

    public $size;
    
    public function dvdForm(){
        formShow('windowD','SIZE','dvd','The size must be in MB!');
    }
    public function addDvd($name, $price, $size){
        parent::setName($name);
        parent::setPrice($price);
        $this->size = $size;
        parent::addItem('dvd', 'SIZE');
    }
    public function viewDvd(){
        showAllData('DVD','DV','SIZE','MB');
    }
}
class Book extends Item{

    public $weight;

    public function bookForm(){
        echo formShow('windowB','WEIGHT','book','Weight must be in kg!');
    }
    public function addBook($name, $price, $weight){
        parent::setName($name);
        parent::setPrice($price);
        $this->weight = $weight;
        parent::addItem('book', 'WEIGHT');
    }
    public function viewBook(){
        showAllData('BOOK','BK','WEIGHT','KG');
    }
}
class Furniture extends Item{

    public $dimensions;
    
    public function fnForm(){
        echo formShow('windowF','DIMENSIONS','furniture','Dimensions must be written in meters as shown height/width/length');
    }
    public function addFn($name, $price, $dimensions){
        parent::setName($name);
        parent::setPrice($price);
        $this->dimensions = $dimensions;
        parent::addItem('furniture', 'DIMENSIONS');
    }
    public function viewFn(){
        showAllData('FURNITURE','FN','DIMENSIONS','m');
    }
}