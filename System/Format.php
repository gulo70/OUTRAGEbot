<?php
/**
 *	Format class for OUTRAGEbot
 *
 *	All the formatting that that the bot needs, colours and/or otherwise, are all stored here.
 -
 -	<html>
 -
 *	<b>Obviously HTML formatting goes in here, I haven't got in there are.</b>	
 -
 -	</html>
 -
 *
 *	@package OUTRAGEbot
 *	@copyright David Weston (c) 2009 -> http://www.typefish.co.uk/licences/
 *	@author David Weston <westie@typefish.co.uk>
 *	@version 1.0-RC3
 */

class Format
{
	/* Defining text formatting */
	const
		Bold = "\002",
		Clear = "\017",
		Colour = "\003",
		CTCP = "\001",
		Inverse = "\026",
		Tab = "\011",
		Underline = "\037";
		
		
	/* Defining colours */
	const
		White = "\00300",
		Black = "\00301",
		DarkBlue = "\00302",
		DarkGreen = "\00303",
		Red = "\00304",
		Brown = "\00305",
		Purple = "\00306",
		Orange = "\00307",
		Yellow = "\00308",
		Green = "\00309",
		Teal = "\00310",
		LightBlue = "\00311",
		Blue = "\00312",
		Pink = "\00313",
		DarkGrey = "\00314",
		Grey = "\00315";
	
	
	/* Defining backgrounds too! */
	const
		Back_White = ',00',
		Back_Black = ',01',
		Back_DarkBlue = ',02',
		Back_DarkGreen = ',03',
		Back_Red = ',04',
		Back_Brown = ',05',
		Back_Purple = ',06',
		Back_Orange = ',07',
		Back_Yellow = ',08',
		Back_Green = ',09',
		Back_Teal = ',10',
		Back_LightBlue = ',11',
		Back_Blue = ',12',
		Back_Pink = ',13',
		Back_DarkGrey = ',14',
		Back_Grey = ',15';
}
