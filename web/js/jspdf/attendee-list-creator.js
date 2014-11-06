function demoTwoPageDocument() {
	var doc = new jsPDF({'orientation':'portrait', 'lineHeight':1.5, 'textColor':'0.3 g'});

	doc.setFont("helvetica");

	// keep track of where we are
	verticalOffset = 10;

//--Event Details------------------------------------------------------

	// event details header
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Event details');
	verticalOffset += 2;
	doc.setLineWidth(0.1);
	doc.line(20, verticalOffset, 190, verticalOffset);

	// event details
	verticalOffset += 10;
	// e-mail
	doc.setFontSize(12);
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Course: ');
	doc.setFontType("normal");
	doc.text(70, verticalOffset, courseTitle);

	verticalOffset += 10;
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Date: ');
	doc.setFontType("normal");
	doc.text(70, verticalOffset, courseDate);

//--REGISTERED ATTENDEES-------------------------------------------------
	
	verticalOffset += 15;
	doc.setFontSize(16);
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Attendee list');
	verticalOffset += 2;
	doc.setLineWidth(0.1);
	doc.line(20, verticalOffset, 190, verticalOffset);

	// attendee list
	verticalOffset += 10;


	console.dir(attendees);
	for(i = 0; i<attendees.length; i++){
		//var obj = exp[inner];
				
		doc.setFontType("normal");
		doc.setFontSize(12);
		doc.text(20, verticalOffset, attendees[i]);

		verticalOffset += 10;
	}	

/*
	verticalOffset += 15;
	doc.setFontSize(12);
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Profile');
	verticalOffset += 2;
	doc.setLineWidth(0.1);
	doc.line(20, verticalOffset, 190, verticalOffset);

	verticalOffset += 5;
	size = 9;
	doc.setFontType("normal");
	lines = doc.setFontSize(size).splitTextToSize(profile, 170)
	doc.text(20, verticalOffset + size / 72, lines);

//--WORK EXPERIENCE-------------------------------------------------

	verticalOffset += (lines.length * 5) + 5;
	doc.setFontSize(12);
	doc.setFontType("bold");
	doc.text(20, verticalOffset, 'Work Experience');
	verticalOffset += 2;
	doc.setLineWidth(0.1);
	doc.line(20, verticalOffset, 190, verticalOffset);

	verticalOffset += 5;
	doc.setFontSize(9);	
	for(var inner in exp){
		var obj = exp[inner];
				
		doc.setFontType("bold");
		doc.text(20, verticalOffset, obj["company"]);
		doc.text(170, verticalOffset, obj["yearFrom"] + " to " + obj["yearTo"]);
				
		verticalOffset +=5;
		doc.setFontType("normal");
		doc.text(20, verticalOffset, obj["summary"]);

		verticalOffset += 10;
	}
*/
	
	// Save the PDF
	doc.output('save','Test.pdf');
}