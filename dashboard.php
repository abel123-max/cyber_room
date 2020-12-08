/*---pour éviter les bugs d'affichage */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-image: url(images/fun_1.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Sansita Swashed', cursive;
}
/*header*/
.header{
    width: 100%;
    height: 125px;
    display: flex;
    background-color: #192d3b;
}

.header_cadre{

    width: 80%;
    height: 125px; 
    display: flex;
    flex-direction: row;
}

.header_time{
    border-left: 2px solid #ffffff;
    width: 20%;
    height: 125px;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.in_time{
    font-size: 65px;
    color: #192d3b;
}

.title{
    font-size: 75px;
    margin-left: 400px;
    margin-top: 2.5%;
    color: #ffffff;


}
.cadre_logo{
    border: 2px solid rgb(255, 255, 255);
    border-bottom: transparent;
    border-top: transparent;
    width: 125px;
    height: 100%;
    border-radius: 30px;
    background-image: url(https://zupimages.net/up/20/45/hbr2.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-left: 50px;
}


/* Partie Création de comptes*/

.account{
    width: 100%;
    height: auto;
    background-color:  #ffffff;
}

.account_titre{
    padding-top: 50px;
    font-size: 25px;
    color: #192d3b;
    text-align: center;
}

form{
    display: flex;
    align-items: center;
    flex-direction: column;
}

.account_input{
    margin-top: 50px;
    padding: 8px 5px;
    color: #192d3b;
    font-size: 20px;
    background-color: #ffffff;
    border: 2px solid #192d3b;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #192d3b;
}

.reservations_input{
    margin-top: 50px;
    padding: 8px 5px;
    color: #ffffff;
    font-size: 20px;
    background-color: #192d3b;
    border: 2px solid #ffffff;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #ffffff;
}

.account_button{
    width: 20%;
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 8px 5px;
    color: #192d3b;
    font-size: 20px;
    background-color: #ffffff;
    border: 2px solid #192d3b;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #192d3b;
}

.account_button:hover{
    cursor: pointer;
}

/*Partie assignation de poste*/

.formulaires{
    display: flex;
    margin-top: 100px;
}

.reservations{
    width: 100%;
    height: auto;
    background-color: #192d3b;
}

.reservations_titre{
    padding-top: 50px;
    font-size: 25px;
    color: #ffffff;
    text-align: center;
}

select{
    width: 15%;
    margin-top: 50px;
    padding: 8px 5px;
    color: #ffffff;
    font-size: 20px;
    background-color: #192d3b;
    border: 2px solid #ffffff;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #ffffff;
}

.reservations_button{
    width: 20%;
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 8px 5px;
    color: #ffffff;
    font-size: 20px;
    background-color: #192d3b;
    border: 2px solid #ffffff;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #ffffff;
}

/* Partie information sur les postes*/

.postes{
    width: 90%;
    height: auto;
    margin: 50px auto 50px auto;
    border: 3px solid black;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.poste_1, .poste_3, .poste_6, .poste_8{
    width: 25%;
    height: auto;
    background-color: #192d3b;
}

.poste_2, .poste_4, .poste_5, .poste_7{
    width: 25%;
    height: auto;
    background-color: #ffffff;
}

.poste_img__blue{
    border-bottom: 3px solid white;
}

.poste_img__white{
    border-bottom: 3px solid #192d3b;
}

.poste_infos__blue{
    width: 100%;
    height: auto;
    padding-top: 18px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    font-size: 25px;
    text-align: center;

}

.poste_infos__white{
    width: 100%;
    height: auto;
    padding-top: 18px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #192d3b;
    font-size: 25px;
    text-align: center;

}

.poste_liste{
    list-style-type: none;
}

.poste_timer{
    width: 100%;
    height: auto;
    padding-top: 18px;
    padding-bottom: 18px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.timer_input__white{
    width: 75%;
    margin-top: 18px;
    padding: 8px 5px;
    color: #192d3b;
    font-size: 20px;
    background-color: #ffffff;
    border: 2px solid #192d3b;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #192d3b;
}

.poste_button__white{
    margin-top: 18px;
    padding: 8px 5px;
    color: #192d3b;
    font-size: 20px;
    background-color: #ffffff;
    border: 2px solid #192d3b;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #192d3b;
}

.timer_input__blue{
    width: 75%;
    margin-top: 18px;
    padding: 8px 5px;
    color: #ffffff;
    font-size: 20px;
    background-color: #192d3b;
    border: 2px solid #ffffff;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #ffffff;
}

.poste_button__blue{
    margin-top: 18px;
    padding: 8px 5px;
    color: #ffffff;
    font-size: 20px;
    background-color: #192d3b;
    border: 2px solid #ffffff;
    border-radius: 8px;
    box-shadow: 2px 2px 7px #ffffff;
}

.poste_button__white:hover, .poste_button__blue:hover{
    cursor: pointer;
}

/* Partie Footer*/

footer{
    background-color: #000000;
    color: #ffffff;
}

.copyright{
    text-align: right;
    color: #ffffff;
}

.mail{
    margin-top: 20px;
    padding: 30px;
    font-size: large;
    list-style-type: none;
    column-count: 4;
}
li{
    padding: 10px;
}

/* Partie responsive*/

@media all and (max-width: 1048px)
{
    header
    {
        width: auto;
        text-align: left;


    }
    .title{
        font-size: 65px;
        margin-left: 100px;




    }
    .in_time{
        font-size: 40px;
        color: #0080ff;
    }

}
