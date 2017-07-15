<?php
class cart
{
    public $id,$product_name,$photo,$price,$cgst,$sgst,$tgst,$mrp,$stock,$hsn,$qty;

    public function __construct($id,$product_name,$photo,$price,$cgst,$sgst,$tgst,$mrp,$stock,$hsn,$qty)
    {
        $this->id=$id;
        $this->product_name=$product_name;
        $this->photo=$photo;
        $this->price=$price;
        $this->cgst=$cgst;
        $this->sgst=$sgst;
        $this->tgst=$tgst;
        $this->mrp=$mrp;
        $this->stock=$stock;
        $this->hsn=$hsn;
        $this->qty=$qty;

    }
}