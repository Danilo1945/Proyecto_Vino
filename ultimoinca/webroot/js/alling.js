/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 $(function () {

                $('#slider1').Thumbelina({
                    $bwdBut: $('#slider1 .left'), // Selector to left button.
                    $fwdBut: $('#slider1 .right')    // Selector to right button.
                });

                $('#slider2').Thumbelina({
                    $bwdBut: $('#slider2 .left'), // Selector to left button.
                    $fwdBut: $('#slider2 .right')    // Selector to right button.
                });

                $('#slider3').Thumbelina({
                    orientation: 'vertical', // Use vertical mode (default horizontal).
                    $bwdBut: $('#slider3 .top'), // Selector to top button.
                    $fwdBut: $('#slider3 .bottom')   // Selector to bottom button.
                });

            })