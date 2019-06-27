<?php
class OleoModel extends CI_Model
{
    /**
     * 
     * Model responsavel por: 
     * Coletar 
     * Listar 
     * Remover 
     * O oleo
     * 
     */

    /**
     * Função para armazenar no bando de dados
     * todos os registros feito pelos os usuarios 
     */
    public function doar()
    {
        if (!sizeof($_POST)) return;

        $oleo = $this->input->post("oleo");
        $dia = $this->input->post("dia");
        $horario = $this->input->post("horario");
        $id_usuario = $this->ion_auth->user()->row()->id;

        $sql = "INSERT INTO cadastros(id_usuario,oleo,dia ,horario) 
        VALUES ('$id_usuario','$oleo', '$dia', '$horario')";

        $this->db->query($sql);
    }

    /**
     * Função para listar as coletas que o usuario fez
     */
    public function listar()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT id_oleo, oleo, dia, horario, estado_oleo
            FROM cadastros
            INNER JOIN users ON users.id = cadastros.id_usuario
            and users.id = $id
            and cadastros.estado_oleo = 0
            ORDER BY cadastros.dia desc";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {


            $html .= "<tr class='text-center'>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $html .= "<td>$row->horario</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleoColetadoUsuario($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoUsuario($row->id_oleo) . '</td>';
            }


            $html .= "</tr>";
        }
        return $html;
    }
    /**
     * Função para listar tos os depositos para o usuario logado 
     */
    public function listarUsuario()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT id_oleo, oleo, dia, horario, estado_oleo
            FROM cadastros
            INNER JOIN users ON users.id = cadastros.id_usuario
            and users.id = $id
            ORDER BY cadastros.dia desc";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {


            $html .= "<tr class='text-center'>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $html .= "<td>$row->horario</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleoColetadoUsuario($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoUsuario($row->id_oleo) . '</td>';
            }


            $html .= "</tr>";
        }
        return $html;
    }
    /**
     * Função para listar os óleos para ser retirado 
     */
    public function listarOleo()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo
        FROM cadastros
        INNER JOIN users ON users.id = cadastros.id_usuario
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia asc";

        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td> $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    /**
     * Função para listar os óleos já coletados
     */
    public function listarColetado()
    {
        $data = date('Y-m-d');
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo
        FROM cadastros
        INNER JOIN users ON users.id = cadastros.id_usuario
        and cadastros.estado_oleo = 1";

        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td> $row->horario</td>";
            $html .= "<td>$row->bairro</td>";
            $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            $html .= "</tr>";
        }
        return $html;
    }

    /**
     * Funções para atualizar quando o óleo ja foi removido 
     * Está função oculta o registro quando o adm apaga o deposito já coletado
     */
    public function removerOleo($id)
    {
        $sql = "UPDATE  cadastros SET estado_oleo =  '2' WHERE  cadastros.id_oleo = $id";
        $this->db->query($sql);
    }
    /**
     * Função para remover os depositos que são feitos pelos usuarios 
     */
    public function removerOleoUsuario($id)
    {
        $this->db->delete('cadastros', "id_oleo = $id");
    }

    /**
     * Função para o quando o adm coletar o óleo mudar de tabela !
     */
    public function adicionaOleo($id)
    {
        $sql = "UPDATE  cadastros SET estado_oleo =  '1' WHERE  cadastros.id_oleo = $id";
        $this->db->query($sql);
    }

    /**
     * Funções que mostra ao adm o total de oleo depositado e o total de oleo que tem que retirar 
     */

    public function totalColetado()
    {
        $sql = "SELECT sum(oleo) from cadastros where estado_oleo = 1";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }
    public function totalBuscar()
    {
        $sql = "SELECT sum(oleo) from cadastros where estado_oleo = 0";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    /**
     * Botão para a página do administrador 
     * Botão para mostrar os status da coleta 
     * 
     * Pronto para coleta -> buttonsOleo
     * Oleo já coletado -> buttonsOleoColetado
     * Oleo que já passou o prazo -> buttonsOleoPrazo
     * Oleo que ainda não chegou o dia -> buttonsOleoOutroDia
     * 
     */
    private function get_action_buttonsOleo($id)
    {
        $html = '<a href="' . base_url('index.php/adm/adicionaOleo/' . $id) . '">
        <button type="button" class="btn btn-outline-success btn-sm waves-effect">Coletar</button></i></a>';
        return $html;
    }
    private function get_action_buttonsOleoColetado($id)
    {

        $html = '<button type="button" class="btn btn-outline-grey btn-sm">Coletado</button></i>';
        return $html;
    }
    private function get_action_buttonsOleoPrazo($id)
    {
        $html = '<a href="' . base_url('index.php/adm/adicionaOleo/' . $id) . '">
            <button type="button" class="btn btn-outline-warning btn-sm waves-effect">Coleta atrasada</button>
        </a>';
        return $html;
    }
    private function get_action_buttonsOleoOutroDia($id)
    {
        $html = '<button type="button" class="btn btn-outline-danger btn-sm waves-effect">Coleta bloqueada</button>';
        return $html;
    }
    /**
     * Botões para a págna do ususrio
     * Excluir o óleo depósitado 
     * Mostrar um botão onde os oleos ja foi coletado 
     */
    private function get_action_buttonsOleoUsuario($id)
    {
        $html = '<button type="button" class="btn btn-outline-success btn-sm waves-effect">Coletado</button>';
        return $html;
    }
    private function get_action_buttonsOleoColetadoUsuario($id)
    {
        $html = '<a href="' . base_url('index.php/usuario/removerOleoUsuario/' . $id) . '">
        <i class="far fa-trash-alt mr-3 text-danger"></i></a>';
        return $html;
    }
}
