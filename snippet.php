/*** Voraussetzung webfontloader (https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js) verknüpft 
und Fonts definiert - funktioniert mit Google Fonts und Typekit
außerdem muß der Font per skript im Head eingebunden sein ***/

/*** In die functions.php

        
        **/


/*.wf-loading:after {
    content: "loading fonts ... please wait ...";
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    color: white;
    font-size: 1.5em;
    font-weight: bold;
    line-height: 20em;
    text-align: center;
    @include alpha-background-color(rgba(black, 0.75), white);
}*/
.wf-loading /**vorm body **/{
    * {
        opacity: 0;
    }
/*    @include alpha-background-color(rgba(black, 0.25), white);*/
   background:{
        color:rgba(0,0,0,1);
        image:url('../img/spin.gif');
        repeat:no-repeat;
        position:center center;
    }
     height: 100%;
    overflow: hidden;
}
.wf-active, 
.wf-inactive{
    *{
    @include transition(opacity 1s ease-out);
    }
}

