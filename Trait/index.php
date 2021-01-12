<?php 


trait Message
{
    public function Messanger()
    {
        echo "this message comming from mobile <br>";
    }

    public function email()
    {
        echo "this message comming from mobile <br>";
    }
}

trait Call
{
    public function Mobile()
    {
        echo "this call comming from Mobile <br>";
    }

    public function web()
    {
        echo "this call comming from Web <br>";
    }
}
class Send
{

    use Call,Message;

    public function __construct()
    {
        $this->Messanger();
        $this->email();
        $this->mobile();
        $this->web();
    }

}

$send = new Send();
?>