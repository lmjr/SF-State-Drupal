var theSymbols = new Array()
theSymbols = [" ", "!", "\"", "$", "%", "^", "&", "*", "(", ")",
    "-", "_", "=", "+", "[", "{", "]", "}", ";", ":", "'", "@", "#", "~", "\\", 
    "|", ",", "<", ".", ">", "/", "?"]
//Can't use "¬", "¦", or "£" as it won't display in Firefox

function hideNeedJavaScript()
{
    // Hide Need JavaScript div
    document.getElementById("needJavaScript").style.display = 'none';
    // Show Generator form
    document.getElementById("generator").style.display = 'block';
}

function GenerateAndValidate(lengthOfPassword, wantSymbols)
{
	// Check what length the user has chosen
	// Firefox says form1 is not defined
	//var lengthOfPassword = form1.ddlLength.options(form1.ddlLength.selectedIndex).value; - This works, except Firefox!
	//Have to pass the chosen length as a parameter because Firefox can't find form1
	
    var thePassword = new Array();
    thePassword = GeneratePassword(lengthOfPassword, wantSymbols);
    while(!Validate(thePassword, lengthOfPassword, wantSymbols))
    {
        thePassword = GeneratePassword(lengthOfPassword, wantSymbols);
    }
    Display(thePassword);
}

function GeneratePassword(lengthOfPassword, wantSymbols)
{
    // Strings for letters and numbers, array for symbols
    var theLetters = "abcdefghijklmnopqrstuvwxyz";
    var theNumbers = "1234567890";

    //ARRAYS
    	// Variable for strong password
    	var StrongPasswordArray = new Array();

    //LETTERS
    	// Generate an array of random letters, up to the user's chosen length
    	for(var loop=0; loop < lengthOfPassword; loop++)
    	{
		    // Get a random number between zero and one for each one to decide if we'll capitalise each letter as we loop through the array
		    var capitalise = Math.round(Math.random()*1);
		    if(capitalise == 0)
		    {
    			StrongPasswordArray[loop] = theLetters.charAt(Math.round(Math.random()*25)).toUpperCase()
		    }
		    else
		    {
    			StrongPasswordArray[loop] = theLetters.charAt(Math.round(Math.random()*25));
		    }
	    }
//alert("Strong password's letters are: " + StrongPasswordArray + " and the length is " + StrongPasswordArray.length);

    //NUMBERS
    	// Get a random number between one and the length; 
    	// insert that many numerical digits at random places in the string
    	var numberOfDigits;
    	numberOfDigits = Math.round(Math.random() * (lengthOfPassword - 1)) + 1;
//alert("The number of digits shall be " + numberOfDigits);
    	// Loop to add that amount of numbers
    	for(var loop=0; loop < numberOfDigits; loop++)
    	{
		    // choose a random position in the string for the number
		    var positionForNumeric = Math.round(Math.random() * (lengthOfPassword - 1));	// choose a position for this number, less than the length of the password
		    // Note that the same position may be chosen more than once,
		    // due to the random function, so we may get less numbers than the number chosen
		    // choose a number from 0 to 9
		    var theNumber = Math.round(Math.random()*9);
		    // insert that number
		    StrongPasswordArray[positionForNumeric] = theNumber;
	    }
//alert("Strong password's letters and numbers are: " + StrongPasswordArray + " and the length is " + StrongPasswordArray.length);

    //SYMBOLS
    	if(wantSymbols)
        {
    	    // Put a symbol in the second, third, fourth, fifth or sixth position
    	    // Get a random number between two and six to decide where to put in a symbol
    	    //  and put a random symbol in the second, third, fourth, fifth or sixth position
    	    var positionForSymbol = Math.round(Math.random()*4) + 2;
    	    // Choose a number from 0 to the length of the theSymbols array, to choose a symbol
    	    var locationOfSymbolInArray = Math.round(Math.random()*(theSymbols.length - 1));
    	    var theSymbol = theSymbols[locationOfSymbolInArray];
    	    // Insert that symbol
    	    StrongPasswordArray[positionForSymbol] = theSymbol;
        
    	    // Now put in random symbols
    	    // Get a random number between one and the length and insert that many numerical digits at random places in the string
    	    // Note that the same position may be chosen more than once, due to the random function, so we may get less numbers than the number chosen
    	    var numberOfSymbols;
    	    numberOfSymbols = Math.round(Math.random() * (lengthOfPassword - 1)) + 1;
    	    // Loop to add that amount of symbols
    	    for(var loop=0; loop < numberOfSymbols; loop++) // 0 to numberOfSymbols
    	    {
		        // choose a random position in the string for the number
		        positionForSymbol = Math.round(Math.random()* (lengthOfPassword - 1));	// choose a position for this number, less than the length of the password
		        // Note that the same position may be chosen more than once, due to the random function, so we may get less symbols than the number chosen
        	    // Choose a number from 0 to the length of the theSymbols array, to choose a symbol
        	    locationOfSymbolInArray = Math.round(Math.random()*(theSymbols.length - 1));
    	        theSymbol = theSymbols[locationOfSymbolInArray];
		        // Insert that symbol
		        StrongPasswordArray[positionForSymbol] = theSymbol;
            }
//alert(StrongPasswordArray);
        }
	    return StrongPasswordArray;
    }
    
    function Validate(StrongPasswordArray, lengthOfPassword, wantSymbols)
    {
    //VALIDATION
    var hasAnUpperCaseLetter = false;
    var hasALowerCaseLetter = false;
    var hasANumber = false;
    var hasASymbol = false;
    var correctLength = false;
    
    //Does the password contain at least one upper case letter?
    	for(var loop = 0; loop < StrongPasswordArray.length; loop++)
    	{
		if("A" <= StrongPasswordArray[loop] && StrongPasswordArray[loop] <= "Z")
            {
                hasAnUpperCaseLetter = true;
//alert("Has an upper case letter, which is " + StrongPasswordArray[loop]);
                break;
            }
	    }
    
    //Does the password contain at least one lower case letter?
    	for(var loop = 0; loop < StrongPasswordArray.length; loop++)
    	{
		    if("a" <= StrongPasswordArray[loop] && StrongPasswordArray[loop] <= "z")
            {
                hasALowerCaseLetter = true;
//alert("Has a lower case letter, which is " + StrongPasswordArray[loop]);
                break;
            }
	    }
    
    //Does the password contain at least one number?
	    for(var loop = 0; loop < StrongPasswordArray.length; loop++)
	    {
    		if("0" <= StrongPasswordArray[loop] && StrongPasswordArray[loop] <= "9")
            {
                hasANumber = true;
//alert("Has a number, which is " + StrongPasswordArray[loop]);
                break;
            }
	    }

    //Does the password contain at least one symbol?
        if(wantSymbols)
        {
    	    for(var loop = 0; loop < StrongPasswordArray.length; loop++)
    	    {
                for(var loopSymbols = 0; loopSymbols < theSymbols.length; loopSymbols++)
                {
        		    if(StrongPasswordArray[loop] == theSymbols[loopSymbols])
                    {
                        hasASymbol = true;
                        break;
                    }
                }
	        }
//alert("Has a symbol, which is " + StrongPasswordArray[loop]);
	    }

    //Is the password the desired length?
        if(StrongPasswordArray.length == lengthOfPassword)
        {
            correctLength = true;
//alert("Is the correct length, which is " + lengthOfPassword);
        }
    
    //Report
//alert("Randomly generated characters are " + StrongPasswordArray + "\n\n"
//            + "Contains an upper case letter: " + hasAnUpperCaseLetter + ".\n"
//            + "Contains a lower case letter: " + hasALowerCaseLetter + ".\n"
//            + "Contains a number: " + hasANumber + ".\n"
//            + "Contains a symbol: " + hasASymbol + ".\n"
//            + "Corresponds to chosen length: " + correctLength + ".");

    //If wantSymbols is false, set hasASymbol to be true to get past that validation
    if(!wantSymbols)
    {
        hasASymbol = true;
    }
    //Did all validation tests succeed?
        if(!hasAnUpperCaseLetter || !hasALowerCaseLetter || !hasANumber || !hasASymbol || !correctLength)
        {
//alert("Randomly generated characters failed validation procedure. \nNew password will be generated.");
            //Clear variables
		    var lengthOfPassword = "";
		    var loop = "";
		    var capitalise = "";
		    var numberOfDigits = "";
		    var positionForNumeric = "";
		    var theNumber = "";
		    var positionForSymbol = "";
		    var locationOfSymbolInString = "";
		    var theSymbol = "";
		    var numberOfSymbols = "";
		    var positionForSymbol = "";
		    var locationOfSymbolInString = "";
		    var theSymbol = "";
		    var hasAnUpperCaseLetter = "";
		    var hasALowerCaseLetter = "";
		    var hasANumber = "";
		    var hasASymbol = "";
		    var correctLength = "";
    
            return false;
        }
        else
        {
//alert("Randomly generated characters passed validation procedure. \nThe strong password is " + StrongPasswordArray);
            return true;
        }
    }
    
    
    function Display(StrongPasswordArray)
    {   
    //DISPLAY PASSWORD
    	// Add each character from the array to a string
	    var StrongPassword = "";
	    for (var loop = 0; loop < StrongPasswordArray.length; loop++)
	    {
    		StrongPassword += StrongPasswordArray[loop];
    	}
    
        // Also display it using words to represent each character,
    	var theWords = new Array();
	    // alpha bravo charlie delta echo foxtrot golf hotel india juliet kilo lima mike november oscar papa quebec romeo sierra tango uniform victor whiskey x-ray yankee zulu
        theWords = ["amazon","britney","china","disney","elvis","firefox","google","harry","ipod","jessica","kmart","laptop","microsoft","nokia","oprah","paris","quick","radio","sony","target","usher","virgin","weather","xbox","yellow","zodiac"];
    
    	var lettersArray = new Array();
	    lettersArray = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    
    	var easyToRememberArray = new Array();
    
    	for (var loop = 0; loop < StrongPasswordArray.length; loop++)
    	{
            for(var loopLetters = 0; loopLetters < lettersArray.length; loopLetters++)
	        {
                //Upper case letters
			    if(StrongPasswordArray[loop] == lettersArray[loopLetters].toUpperCase())
	            {
    			    easyToRememberArray[loop] = theWords[loopLetters].toUpperCase();;
                    //continue;
	            }
                //Lower case letters
	    		if(StrongPasswordArray[loop] == lettersArray[loopLetters])
    	        {
			    easyToRememberArray[loop] = theWords[loopLetters];
				//continue;
	            }
            }
            //Numbers
		    if("0" <= StrongPasswordArray[loop] && StrongPasswordArray[loop] <= "9")
            {
                easyToRememberArray[loop] = StrongPasswordArray[loop];
	            //continue;
		    }
            //Symbols
            for(var loopSymbols = 0; loopSymbols < theSymbols.length; loopSymbols++)
	        {
                if(StrongPasswordArray[loop] == theSymbols[loopSymbols])
	            {
                    easyToRememberArray[loop] = StrongPasswordArray[loop];
				    //continue;
                }
            }
	    }
    
    	var easyToRemember = "";
    	for (var loop = 0; loop < easyToRememberArray.length; loop++)
    	{
		    easyToRemember += easyToRememberArray[loop] + " ";
	    }

//alert(easyToRemember);
    
    	// Display the password in the span
        //	lblStrongPassword1.innerText = "Your new strong password is \n" + StrongPassword;
    	//if(document.all) //IE supports only innerText
    	//{
		//    document.getElementById("lblPassword1").innerText = "";
	    //}
	    //else //Firefox supports only textContent
	    //{
    	//	document.getElementById("lblPassword1").textContent = "";
    	//}
    
    	if(document.all)
    	{
		    document.getElementById("lblPassword2").innerText = StrongPassword;
	    }
	    else
	    {
    		document.getElementById("lblPassword2").textContent = StrongPassword;
    	}
    
    	if(document.all)
    	{
		    document.getElementById("lblPasswordEasy1").innerText = "Remember it as: ";
	    }
	    else
	    {
    		document.getElementById("lblPasswordEasy1").textContent = "Remember it as: ";
    	}
    
    	if(document.all)
    	{
		    document.getElementById("lblPasswordEasy2").innerText = easyToRemember;
	    }
	    else
	    {
    		document.getElementById("lblPasswordEasy2").textContent = easyToRemember;
    	}
    }