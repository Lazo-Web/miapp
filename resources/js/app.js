import "@fortawesome/fontawesome-free/js/fontawesome.min"
import "@fortawesome/fontawesome-free/js/solid.min"


if (document.startViewTransition) {
    document.startViewTransition(() => {
      // Update the DOM here.
      document.body.classList.toggle('dark');
    });
    }