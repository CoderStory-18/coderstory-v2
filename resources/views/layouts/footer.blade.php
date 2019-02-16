<footer class="footer pt-4" style="background-color: #0D1F2D">
    <div class="container text-center">

        <div class="social social-gray pb-2">
            <a class="social-facebook" href="https://fb.me/coderstoryio" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="social-twitter" href="https://twitter.com/coder_story" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="social-instagram" href="https://instagram.com/coder_story" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <small>hello@coderstory.io</small>

    </div>
</footer>

<!-- Scripts -->

{{-- <script>
        var simplemde = new SimpleMDE({
	autofocus: true,
	autosave: {
		enabled: true,
		uniqueId: "MyUniqueID",
		delay: 1000,
	},
	blockStyles: {
		bold: "__",
		italic: "_"
	},
	element: document.getElementById("create"),
	forceSync: true,
	hideIcons: ["guide", "heading"],
	indentWithTabs: false,
	initialValue: "Time to write the interview",
	insertTexts: {
		horizontalRule: ["", "\n\n-----\n\n"],
		image: ["![](http://", ")"],
		link: ["[", "](http://)"],
		table: ["", "\n\n| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text      | Text     |\n\n"],
	},
	lineWrapping: false,
	parsingConfig: {
		allowAtxHeaderWithoutSpace: true,
		strikethrough: false,
		underscoresBreakWords: true,
	},
	placeholder: "Type here...",
	previewRender: function(plainText) {
		return customMarkdownParser(plainText); // Returns HTML from a custom parser
	},
	previewRender: function(plainText, preview) { // Async method
		setTimeout(function(){
			preview.innerHTML = customMarkdownParser(plainText);
		}, 250);

		return "Loading...";
	},
	promptURLs: true,
	renderingConfig: {
		singleLineBreaks: false,
		codeSyntaxHighlighting: true,
	},
	shortcuts: {
		drawTable: "Cmd-Alt-T"
	},
	showIcons: ["code", "table"],
	spellChecker: true,
	status: false,
	status: ["autosave", "lines", "words", "cursor"], // Optional usage
	status: ["autosave", "lines", "words", "cursor", {
		className: "keystrokes",
		defaultValue: function(el) {
			this.keystrokes = 0;
			el.innerHTML = "0 Keystrokes";
		},
		onUpdate: function(el) {
			el.innerHTML = ++this.keystrokes + " Keystrokes";
		}
	}], // Another optional usage, with a custom status bar item that counts keystrokes
});
    </script> --}}
<script src="/js/page.min.js"></script>
<script src="/js/script.js"></script>
