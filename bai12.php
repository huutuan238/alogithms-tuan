<?php
class Product {
    private $name,$price,$quality,$categoryId;
    public function __construct($name,$price,$quality,$categoryId)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quality = $quality;
        $this->categoryId = $categoryId;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuality()
    {
        return $this->quality;

    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function show()
    {
        print( 'Name : ' . $this->name . '  Price : '. $this->price . '  Quality : '. $this->quality . '   CategoryID : ' . $this->categoryId . '<br/>');
    }

}
$products = array(
    new Product("CPU",750,10,1),
    new Product("RAM",50,2,2),
    new Product("HDD",70,1,2),
    new Product("Main",400,3,1),
    new Product("Keyboadrd",40,8,4),
    new Product("Mouse",25,50,4),
    new Product("VGA",60,3,3),
    new Product("Monitor",120,28,2),
    new Product("Case",120,28,5),
);
function sortByName($listProduct) {
    $countList = count($listProduct);
    for ($i = 0; $i < $countList; $i++)
    {
        $j = $i;
        $current = $listProduct[$i];
        while($j > 0 && (strlen($listProduct[$j - 1]->getName()) < strlen($current->getName())))
        {
            $listProduct[$j] = $listProduct[$j - 1];
            $j -= 1;
        }

        $listProduct[$j] = $current;
    }
  return $listProduct;
}
// void insertionSort(int arr[], int n)
// {
//    int i, key, j;
//    for (i = 1; i < n; i++)
//    {
//        key = arr[i];
//        j = i-1;

//         Di chuyển các phần tử có giá trị lớn hơn giá trị
//        key về sau một vị trí so với vị trí ban đầu
//        của nó
//        while (j >= 0 && arr[j] > key)
//        {
//            arr[j+1] = arr[j];
//            j = j-1;
//        }
//        arr[j+1] = key;
//    }
// }
var_dump(sortByName($products));
?>
