CKEDITOR.replace( 'respond',{
								// Define the toolbar groups as it is a more accessible solution.
								toolbarGroups: [
									{"name":"basicstyles","groups":["basicstyles"]},
									{"name":"colors","groups":["colors"]},
									{"name":"styles","groups":["styles"]},
									{"name":"links","groups":["links"]},
									//{"name":"paragraph","groups":["list","blocks"]},
									{"name":"insert","groups":["insert"]},
								],
								// Remove the redundant buttons from toolbar groups defined above.
								removeButtons: 'document,about,Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
							} );
