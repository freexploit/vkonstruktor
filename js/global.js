$(
function ()
{
   $("div#logo").hover(
   function ()
   {
   $("ul#menu").fadeIn('fast');
   },
   function ()
   {
      $("ul#menu").fadeOut('fast');
   }
   );

}

);
