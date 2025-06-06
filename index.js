// Including all the editors and registering them with Alpine.js, showcasing both PoC and final choice.

import EasyMDE from "./EasyMDE"; // Final choice
import TipTapEditor from "./TipTapEditor"; // PoC
import TinyMCE from "./TinyMCE"; // PoC
import EditorJS from "./EditorJS"; // PoC

Alpine.data("EasyMDE", EasyMDE); // Final choice
Alpine.data("editor", TipTapEditor); // PoC
Alpine.data("tinymce", TinyMCE); // PoC
Alpine.data("editorJS", EditorJS); // PoC
