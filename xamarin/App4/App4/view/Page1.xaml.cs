using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace App4.view
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Page1 : ContentPage
    {
        public Page1()
        {
            InitializeComponent();
        }

        private async void Button1_Clicked(object sender, EventArgs e)
        {
            string nombre = EntryNombre.Text;
            string apellido = EntryApellido.Text;
            string email= EntryEmail.Text;
            string telf= EntryTelf.Text;
            string universidad= EntryUniversidad.Text;
            string profesion= Entryprofesion.Text;
            //string idioma = EntryIdioma.Text;
            //string aptitud = EntryAptitudes.Text;
            //string experiencia = EntryExperiencia.Text;


            await Application.Current.MainPage.Navigation.PushAsync(new Page2(nombre, apellido, email, telf,universidad,profesion));
        }
    }
}