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
    public partial class F_Veiculos : Form
    {
        F_Principal fp;
        public F_Veiculos(String v, F_Principal f)
        {
            InitializeComponent();

            tb_list.Text = v;
            fp = f;

            f.num = 10;
        }

        private void F_Veiculos_FormClosed(object sender, FormClosedEventArgs e)
        {
            fp.tb_LV.Text = tb_list.Text;
        }
    }
}
