<?php
/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($name,$email,$msg) {
        // Execute SQL query to INSERT into messages table
    $query="INSERT INTO message 
    (name,email,message,date_posted,is_approved)
    VALUES ('$name','$email','$msg',CURRENT_DATE(),'N')";

    $return=mysql_query($query);

    }

    public static function deleteMessage($name,$email) {
        // Execute SQL to delete the message based on ID
    $query = "DELETE from message where name = '$name' and email = '$email' ";
    $result = mysql_query($query);
    return $result;
    }

   public static function getForms(){
$query = "select * from message";
        $getInfo = mysql_query($query);
        $list = array();
        if(mysql_num_rows($getInfo) >0){
            while($row = mysql_fetch_assoc($getInfo)){
                    $list[] = $row;
            }
        }
        return $list;
   }
   public static function getMessage($id){
    $que = "SELECT * FROM message WHERE id = '$id' ";
$query = mysql_query($que);
$arr = array();
    if(mysql_num_rows($query)>0){
        while($row = mysql_fetch_assoc($query)){
            $arr[] = $row;
        }
    }
    return $arr;
   }
    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
    $que = "UPDATE message SET is_approved = 'Y'  where id = '{$id}'";
    $gets = mysql_query($que);
    return $gets;
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
    $que = "UPDATE message SET is_approved = 'N'  where id = '{$id}'";
    $gets = mysql_query($que);
    return $gets;
    }
    /**
     * Get the Approved messages
     * @return Message Object
     */
    public static function getApprovedMsg(){
        $query = "select * from message where is_approved='Y' ";
        $getInfo = mysql_query($query);
        $list = array();
        if(mysql_num_rows($getInfo) >0){
            while($row = mysql_fetch_assoc($getInfo)){
                    $list[] = $row;
            }
    }
    return $list;
}
}

?>
