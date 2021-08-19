<?php
 
class Leave_model extends CI_Model {
    
    /*to display the inserted csv/data*/
    public function insert_transaction($data){
        $this->db->insert('tbl_transactions', $data);
        $res = $this->db->affected_rows();
        return $res;
    }

    public function insert_logs($data){
        $this->db->insert('logs', $data);
        $res = $this->db->affected_rows();
        return $res;
    }

    public function get_transaction(){
        // $this->db->order_by('tid', 'desc');
        $q = $this->db->get('tbl_transactions');
        $res = $q->result();
        return $res;
    }

    function delete_med($id){
        $this->db->where('id',$id);
        $this->db->delete('tbl_inventory');
        $res = $this->db->affected_rows();
        return $res;
    }

     public function get_specific_order($orderno)
     {
        $this->db->like('orderno', $orderno);
        $this->db->group_by('orderno'); 
        $query = $this->db->get('tbl_transactions'); 
        return $query->result();
     }

     public function get_sspecific_order($orderno)
     {
        $this->db->where('orderno', $orderno);
        $query = $this->db->get('tbl_transactions'); 
        return $query->row();
     }
     public function edit_meds($id,$data)
     {
        $this->db->where('id', $id);
        $query = $this->db->update('tbl_inventory',$data); 
        return $query;
     }

     public function update_quantity($id,$data)
     {
        $this->db->set('quantity', $data);
        $this->db->where('id', $id);
        $query = $this->db->update('tbl_inventory'); 
        return $query;
     }

    public function add_med($data){
      $this->db->insert('tbl_inventory', $data);
    return $afftectedRows = $this->db->affected_rows();
    }

     public function add_stock($data){
      $this->db->insert('tbl_stocks', $data);
    return $afftectedRows = $this->db->affected_rows();
    }

    public function get_spec_meds($id){
        $this->db->where('id', $id);
        $query =  $this->db->get('tbl_inventory');    
        return $query->row();
    }

    public function get_meds(){
        // $this->db->order_by('tid', 'desc');
        $q = $this->db->get('tbl_inventory');
        $res = $q->result();
        return $res;
    }

    public function get_meds_all(){
        $this->db->order_by('item_description', 'asc');
        $q = $this->db->get('tbl_inventory');
        $res = $q->result();
        return $res;
    }



    public function get_orders($orderid){
        $q1 = $this->db->query("SELECT tbl_inventory.*, tbl_transactions.* from tbl_transactions inner join tbl_inventory
        on tbl_transactions.item_id = tbl_inventory.id where tbl_transactions.orderno = '".$orderid."'");
        $query = $q1->result();
        return $query;
    }

    public function get_orderss(){
        $this->db->select('*');
        $this->db->group_by('orderno'); 
        $query =  $this->db->get('tbl_transactions');
        return $query->result();

    }


    public function get_inventory()
    {
        $this->db->order_by('id', 'asc');
        // $this->db->where('quantity >', 0);
        $q = $this->db->get('tbl_inventory');
        $res = $q->result();
        return $res;
    }

    public function get_customers()
    {
        $this->db->order_by('cid', 'asc');
        $q = $this->db->get('tbl_customers');
        $res = $q->result();
        return $res;
    }

    /*multiple delete*/



    public function daily_report_meds($datefrom, $dateto){
        $q1 = $this->db->query("SELECT *, sum(tbl_transactions.qty_issued) as tot_qty from tbl_transactions INNER JOIN tbl_inventory ON tbl_transactions.item_id = tbl_inventory.id WHERE tbl_transactions.date >= '".$datefrom."' AND tbl_transactions.date <= '".$dateto."' group by tbl_transactions.date, tbl_transactions.item_id ");
        $query = $q1->result(); 
        return $query;
    }

    public function daily_report_stocks($datefrom, $dateto){
        $q1 = $this->db->query("SELECT tbl_transactions.date, tbl_transactions.orderno, tbl_inventory.item_description, tbl_transactions.qty_issued from tbl_transactions INNER JOIN tbl_inventory ON tbl_transactions.item_id = tbl_inventory.id 
        WHERE tbl_transactions.date >= '".$datefrom."' AND tbl_transactions.date <= '".$dateto."' GROUP BY tbl_transactions.tid,tbl_transactions.date ORDER BY tbl_transactions.date");
        $query = $q1->result(); 
        return $query;
    }
    

    public function daily_report_meds_stock_in($datefrom, $dateto){
        $q1 = $this->db->query("SELECT * FROM tbl_inventory WHERE stock_in >= '".$datefrom."' AND stock_in <= '".$dateto."'
            order by item_description");
        $query = $q1->result(); 
        return $query;
    }



    public function daily_report_financial($datefrom, $dateto){
        $q1 = $this->db->query("SELECT SUM(total_amount) as tot, tbl_transactions.date FROM tbl_transactions
WHERE tbl_transactions.date >= '".$datefrom."' AND tbl_transactions.date <= '".$dateto."'
 GROUP BY tbl_transactions.date
ORDER BY tbl_transactions.date asc");
        $query = $q1->result();
        return $query;
    }

    public function monthly_report_financial($year){
        $q1 = $this->db->query("SELECT Month(tbl_transactions.date) as m, sum(tbl_transactions.total_amount) as tot from tbl_transactions INNER JOIN tbl_inventory ON tbl_transactions.item_id = tbl_inventory.id WHERE year(tbl_transactions.date) = '".$year."'  group by month(tbl_transactions.date) ORDER BY tbl_transactions.date ");
        $query = $q1->result();
        return $query;
    }

    public function yearly_report_financial(){
        $q1 = $this->db->query("SELECT year(tbl_transactions.date) as y, sum(tbl_transactions.total_amount) as tot from tbl_transactions INNER JOIN tbl_inventory ON tbl_transactions.item_id = tbl_inventory.id group by year(tbl_transactions.date)");
        $query = $q1->result();
        return $query;
    }

    public function monthly_report_meds($datefrom, $dateto){
        $q1 = $this->db->query("SELECT *, 
                sum(if(Month(tbl_transactions.date) = '1', tbl_transactions.qty_issued, 0))  AS JAN,
                sum(if(Month(tbl_transactions.date) = '2', tbl_transactions.qty_issued, 0))  AS FEB,
                sum(if(Month(tbl_transactions.date) = '3', tbl_transactions.qty_issued, 0))  AS MAR,
                sum(if(Month(tbl_transactions.date) = '4', tbl_transactions.qty_issued, 0))  AS APR,
                sum(if(Month(tbl_transactions.date) = '5', tbl_transactions.qty_issued, 0))  AS MAY,
                sum(if(Month(tbl_transactions.date) = '6', tbl_transactions.qty_issued, 0))  AS JUN,
                sum(if(Month(tbl_transactions.date) = '7', tbl_transactions.qty_issued, 0))  AS JUL,
                sum(if(Month(tbl_transactions.date) = '8', tbl_transactions.qty_issued, 0))  AS AUG,
                sum(if(Month(tbl_transactions.date) = '9', tbl_transactions.qty_issued, 0))  AS SEPT,
                sum(if(Month(tbl_transactions.date) = '10', tbl_transactions.qty_issued, 0))  AS OCT,
                sum(if(Month(tbl_transactions.date) = '11', tbl_transactions.qty_issued, 0)) AS NOV,
                sum(if(Month(tbl_transactions.date) = '12', tbl_transactions.qty_issued, 0)) AS DECE
                 FROM tbl_transactions INNER JOIN tbl_inventory on tbl_transactions.item_id = tbl_inventory.id WHERE tbl_transactions.date >= '".$datefrom."' AND tbl_transactions.date <= '".$dateto."' group by tbl_transactions.item_id ");
        $query = $q1->result();
        return $query;
    }

    public function get_spec_meds_qty($id){
        $this->db->select('quantity');
        $this->db->where('id', $id);
        $query =  $this->db->get('tbl_inventory');    
        return $query->row();
    }

    public function get_cust($id){
        $this->db->where('cid', $id);
        $query =  $this->db->get('tbl_customers');    
        return $query->row();
    }
    function delete_orderno($id){
        $this->db->where('tid',$id);
        $this->db->delete('tbl_transactions');
        $res = $this->db->affected_rows();
        return $res;
    }

}

// $this->db->distinct('OBR_NUM');
// $this->db->get('table'); 


/*END OF FILE*/