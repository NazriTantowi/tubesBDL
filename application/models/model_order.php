<?php 

class Model_order extends CI_Model{
    public function index(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        date_default_timezone_set('Asia/Jakarta');
        $custID     = $data['customer']['custID'];
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $invoice    = array(
            'custID'            => $custID,
            'nama_penerima'          => $nama,
            'alamat_penerima'        => $alamat,
            'tgl_order'     => date('Y-m-d'),
            
        );
        $this->db->insert('tb_order', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'orderID'           => $id_invoice,
                'produkID'          => $item['id'],
                'harga'             => $item['price'],
                'kuantitas'            => $item['qty'],
                'diskon'          => $item['diskon'],
            );
            $this->db->insert('tb_orderdetail', $data);
        }

        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('tb_order');
        if($result->num_rows()> 0){
            return $result->result();
        }else {
            return false;
        }
    }

    public function tampil_order_tenant($id){
        $query =    "SELECT 	tb_orderdetail.*
                    FROM 	    tb_orderdetail, tb_produk, tb_tenant
                    WHERE 	    tb_orderdetail.produkID = tb_produk.produkID
                    AND		    tb_produk.tenantID = tb_tenant.tenantID
                    AND	    	tb_tenant.tenantID = $id";
        return $this->db->query($query);      
    }

    public function ambil_id_invoice($orderID)
    {
        $result = $this->db->where('orderID', $orderID)->limit(1)->get('tb_order');
        if($result->num_rows() > 0){
            return $result->row();
        }else {
            return false;
        }
    }
    public function ambil_id_pesanan($orderID)
    {
        $result = $this->db->where('orderID', $orderID)->get('tb_orderdetail');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}