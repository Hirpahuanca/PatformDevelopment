using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Essentials;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace App4.view
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Page2 : ContentPage
    {
        public Page2(string nombre, string apellido, string email, string telf)
        {
            InitializeComponent();
            labelNombre.Text = nombre + " " + apellido;
            labelEmail.Text = email;
            labelTelf.Text = telf;
            
        }

        private async void Button2_Clicked(object sender, EventArgs e)
        {
            await Application.Current.MainPage.Navigation.PopAsync();
        }
    }
}