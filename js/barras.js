var a = document.querySelectorAll('.barra');
console.log(a);
for (var i = 0; i < a.length; i++)
{
  console.log(a);
  a[i].style.width = a[i].dataset.porcetagem + "%";
}
