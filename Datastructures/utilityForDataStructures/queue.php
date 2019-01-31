
<?php
class QNode{
    public $data;
    public $next;
    /**
     * create QNode with data
      */
    function __construct($d){ 
        $this->data = $d;
        $this->next = null;
    }
}
class Queue{
    public $front;
    public $rear;
    public static $size =0;
    /**
     *  adding elements to queue
    */
    public function enqueue($item){ 
        $new_QQNode = new QNode($item);
        /**if queue is empty then front is newQNode  rear next is newQNode */
        if($this->isEmpty()){ 
            $this->front = $new_QQNode;
        }else{
            $this->rear->next = $new_QQNode; 
        }
        $this->rear = $new_QQNode;
        self::$size++;
    }
    /*
    *if front is null then empty 
     */
    public function isEmpty(){
        if($this->front ==null ){ 
            return true;
        }
        return false;
    }
    /**
     * removing element from queue 
    */
    public function dequeue(){
        
         /**if queue is not empty dequeu at the front */
        if(!$this->isEmpty()){
            $val = $this->front->data;
            $this->front = $this->front->next;
           
        /**return front data */
            return $val; 
        }else{
            
        }
        if($this->front == null){
            $rear = null;
        }
        /**
         * decrement size
         */
        self::$size--; 
        
    }
    public function size(){
        /** return size */
        return self::$size; 
    }
     /**
      * displaying QNodes 
     */
    public function display(){
        
         /**
          * assign temp as front QNode
         */
        $temp = $this->front;
        /**
         *  if temp is null then underflow 
         */
        if($temp == null){ 
            echo "underflow\n";
        }
         /**
          * display until QNode is not nul
           */
        while($temp!=null){
            echo $temp->data ." ";
            $temp = $temp->next;
        }
    }
    public function peek(){
        /**
         *  return front data
         */
        return $this->front->data; 
    }
    /**
     * storing data present in queue in string 
     */
    public function getData(){ 
        $str = "";
        $current = $this->front;
        while($current!=null){
            $str = $str.$current->data." ";
            $current = $current->next;
        }
        return $str;
    }
}