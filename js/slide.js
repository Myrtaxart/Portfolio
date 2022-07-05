var Slide = function(){
    var imgurl;
    var title;
    var description;
    var link;
}
var indicegeral = 0;
var slides = [new Slide(),new Slide()];
slides[0].imgurl = '/img/slides/img1.png';
slides[0].title = "Foxby";
slides[0].description = "Foxby é um livro infantil baseado em uma historia propria que fiz para uma HQ indie que conta um pouco das minhas vivencias de forma ludica e artistica em um contexto infantil.";
slides[0].link =  "/projects/foxby/";
slides[1].imgurl = '/img/slides/img2.png';
slides[1].title = "Hugo Cabret";
slides[1].description = "Alternativa de poster do filme Hugo cabret projetado em torno do conceito de ação e movimento, onde o objetivo é passar de forma estatitica uma ação que representasse o filme.";
slides[1].link =  "/projects/hugocabret/";

var background = document.querySelector('.slide_projects');
var title = document.querySelector('.title_slide');
var description = document.querySelector('.description_slide');
var link = document.querySelector('.link_slide');
var btn_anterior = document.querySelector('.anterior_slide');
var btn_proximo = document.querySelector('.proximo_slide');
var indices = document.querySelector('.indices_slide');
var counter = 0;
var timeLimit = 3;

for (let i = 0; i < slides.length; i++) {
    var indice = document.createElement("li");
    indice.classList.add("indice_slide");
    indice.onclick = function() {definirSlide(i)};;
    indices.appendChild(indice);
}

function timer()
{
    counter++;
    if (counter == timeLimit)
    {
        counter = 0;
        proximoSlide();
    }
}

function definirSlide(indiceslide)
{
    background.style.backgroundImage = "url("+slides[indiceslide].imgurl+")";
    title.innerHTML = slides[indiceslide].title;
    description.innerHTML = slides[indiceslide].description;
    counter = 0;
}

function carregarPagina()
{
    window.location.href = slides[indicegeral].link;
}

function anteriorSlide()
{
    counter = 0;
    indicegeral--;
    if(indicegeral < 0)
    {
        indicegeral = (slides.length - 1);
    }
    definirSlide(indicegeral);
}

function proximoSlide()
{
    counter = 0;
    indicegeral++;
    if(indicegeral > (slides.length - 1))
    {
        indicegeral = 0;
    }
    definirSlide(indicegeral);
}

setInterval(timer, 1000);