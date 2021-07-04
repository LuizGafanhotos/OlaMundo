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
        public F_Principal()
        {
            InitializeComponent();
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
    }
}
