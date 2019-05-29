$(document).ready(function() {
    // open modal
    $('#open-modal').click(function(){
        $('#modal-to-open').css(
         {
            'display':'block'
            }
        );
    }); 
    //close modal
    $('#close-modal').click(function(){
      $('#modal-to-open').css(
        {
            'display' : 'none'
        }

      )
    });
    //send mail with ajax
   //$ ( ' #send-email' ). click ( fonction ( e ) {
	//	e . preventDefault ();
		//var data = {
		//	email :  $ ( ' #email ' ). val (),
		//	nom :  $ ( ' #nom ' ). val (),
		//	objet :  $ ( ' #firstname' ). val (),
		//	message :  $ ( ' #message ' ). val ()
    //    };
    //    //ajax 
	//	$ . ajax ({
	//		url :  " mail.php " ,
	//		type :  ' POST ' ,
	//		data : data,
	//			setTimeout ( function () {
	//				$ ( ' #js_alert_success ' ). css ({ ' display '  :  ' none ' });
	//				$ ( ' #email ' ). val ( " " );
	//				$ ( ' #name ' ). val ( " " );
//					$ ( ' #object ' ). val ( " " );
	//				$ ( ' #message ' ). val ( " " )
//				}, 3000 );
		//	},
		//	erreur :  fonction ( données ) {
	//			$ ( ' #js_alert_danger ' ). css ({ ' display '  :  ' block ' });
		//		setTimeout ( function () {
	//				$ ( ' #js_alert_danger ' ). css ({ ' display '  :  ' none ' });
	//				$ ( ' #email ' ). val ( " " );
	//				$ ( ' #name ' ). val ( " " );
	//				$ ( ' #object ' ). val ( " " );
	//				$ ( ' #message ' ). val ( " " )
		//		}, 3000 );
			//}
	//	});
//	});
});