/*   This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this
   - file, You can obtain one at http://mozilla.org/MPL/2.0/. */



/* smooth scrolling
        just label any anchor links you want to have
        an animated motion with class="scroll"
 */

jQuery(document).ready(function($) {
     
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top-65}, 500);  /*  The "-55" is what prevents it from scrolling too far
                                                                                                                and hiding the headline behind the fixed-position navbar.   */
        });
    });

    