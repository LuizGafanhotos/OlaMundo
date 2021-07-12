
namespace Componente_TextBox
{
    partial class F_Principal
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.btn_adicionar = new System.Windows.Forms.Button();
            this.tb_Veiculo = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.tb_LV = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.btn_Mostrar = new System.Windows.Forms.Button();
            this.btn_vnum = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // btn_adicionar
            // 
            this.btn_adicionar.Location = new System.Drawing.Point(222, 34);
            this.btn_adicionar.Name = "btn_adicionar";
            this.btn_adicionar.Size = new System.Drawing.Size(75, 23);
            this.btn_adicionar.TabIndex = 0;
            this.btn_adicionar.Text = "Adicionar";
            this.btn_adicionar.UseVisualStyleBackColor = true;
            this.btn_adicionar.Click += new System.EventHandler(this.btn_adicionar_Click);
            // 
            // tb_Veiculo
            // 
            this.tb_Veiculo.Location = new System.Drawing.Point(15, 36);
            this.tb_Veiculo.Name = "tb_Veiculo";
            this.tb_Veiculo.Size = new System.Drawing.Size(201, 20);
            this.tb_Veiculo.TabIndex = 1;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(90, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Digite um veículo";
            // 
            // tb_LV
            // 
            this.tb_LV.Location = new System.Drawing.Point(15, 62);
            this.tb_LV.Multiline = true;
            this.tb_LV.Name = "tb_LV";
            this.tb_LV.Size = new System.Drawing.Size(282, 257);
            this.tb_LV.TabIndex = 3;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(12, 335);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(282, 23);
            this.button1.TabIndex = 4;
            this.button1.Text = "Limpar";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // btn_Mostrar
            // 
            this.btn_Mostrar.Location = new System.Drawing.Point(12, 364);
            this.btn_Mostrar.Name = "btn_Mostrar";
            this.btn_Mostrar.Size = new System.Drawing.Size(282, 23);
            this.btn_Mostrar.TabIndex = 5;
            this.btn_Mostrar.Text = "Mostrar Veiculos";
            this.btn_Mostrar.UseVisualStyleBackColor = true;
            this.btn_Mostrar.Click += new System.EventHandler(this.btn_Mostrar_Click);
            // 
            // btn_vnum
            // 
            this.btn_vnum.Location = new System.Drawing.Point(12, 393);
            this.btn_vnum.Name = "btn_vnum";
            this.btn_vnum.Size = new System.Drawing.Size(279, 20);
            this.btn_vnum.TabIndex = 6;
            this.btn_vnum.Text = "Valor da variavel num";
            this.btn_vnum.UseVisualStyleBackColor = true;
            this.btn_vnum.Click += new System.EventHandler(this.btn_vnum_Click);
            // 
            // F_Principal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(307, 422);
            this.Controls.Add(this.btn_vnum);
            this.Controls.Add(this.btn_Mostrar);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.tb_LV);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.tb_Veiculo);
            this.Controls.Add(this.btn_adicionar);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.Name = "F_Principal";
            this.Text = "Componentes";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btn_adicionar;
        private System.Windows.Forms.TextBox tb_Veiculo;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button btn_Mostrar;
        private System.Windows.Forms.Button btn_vnum;
        public System.Windows.Forms.TextBox tb_LV;
    }
}

