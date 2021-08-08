using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Componente_TextBox
{
    public partial class F_Principal : Form
    {
        public int num;
        public F_Principal()
        {
            InitializeComponent();
            num = 0;
        }

        private void btn_adicionar_Click(object sender, EventArgs e)
        {
            if (tb_Veiculo.Text == "")
            {
                MessageBox.Show("Digite um Veículo");
                tb_Veiculo.Focus();
                return;
            }

            tb_LV.Text += tb_Veiculo.Text + ", ";
            //tb_LV.Text = tb_LV.Text + tb_Veiculo.Text;

            tb_Veiculo.Clear();
            tb_Veiculo.Focus();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            tb_LV.Clear();
        }

        private void btn_Mostrar_Click(object sender, EventArgs e)
        {
            F_Veiculos f_Veiculos = new F_Veiculos(tb_LV.Text,this);
            f_Veiculos.ShowDialog();
        }

        private void btn_vnum_Click(object sender, EventArgs e)
        {
            MessageBox.Show(num.ToString());
        }

        private void checkboxToolStripMenuItem_Click(object sender, EventArgs e)
        {
            F_CheckBox f_checkbox = new F_CheckBox();
            f_checkbox.ShowDialog();
        }

        private void checkedListBoxToolStripMenuItem_Click(object sender, EventArgs e)
        {
            F_CheckedListBox f_checkado = new F_CheckedListBox();
            f_checkado.ShowDialog();
        }
    }
}
