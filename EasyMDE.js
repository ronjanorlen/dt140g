// EasyMDE editor component for Alpine.js

import EasyMDE from "easymde";
import "easymde/dist/easymde.min.css";

export default () => ({
  init() {
    new EasyMDE({
      toolbar: [
        "heading-1",
        "heading-2",
        "heading-3",
        "bold",
        "italic",
        "unordered-list",
        "ordered-list",
        "preview",
      ],
      element: this.$refs.easymde,
      spellChecker: false,
      uploadImage: false,
    });
  },
});
