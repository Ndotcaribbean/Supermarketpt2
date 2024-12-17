document.addEventListener("DOMContentLoaded", () => {
    const profileImageInput = document.getElementById("profile-image");
    const imagePreview = document.getElementById("image-preview");
    const themeSelector = document.getElementById("theme-selector");
  
    // Profile image preview
    profileImageInput.addEventListener("change", () => {
      const file = profileImageInput.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          imagePreview.innerHTML = `<img src="${e.target.result}" alt="Profile Preview">`;
        };
        reader.readAsDataURL(file);
      } else {
        imagePreview.innerHTML = "<p>Preview will appear here.</p>";
      }
    });
    // Profile Picture Upload
document.getElementById('profile-pic').addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        // Update the profile picture in the dropdown
        const userIcon = document.querySelector('.user-icon img');
        if (userIcon) {
          userIcon.src = e.target.result;
        }
      };
      reader.readAsDataURL(file);
    }
  });
  
  
    // Theme selection
    // Function to Change Theme
function changeTheme(theme) {
    const body = document.body;
  
    if (theme === 'dark') {
      body.classList.add('dark-theme');
      body.classList.remove('light-theme');
    } else if (theme === 'light') {
      body.classList.add('light-theme');
      body.classList.remove('dark-theme');
    }
  }
  
  // Profile Picture Upload (Optional to Implement Server Logic)
  document.getElementById('profile-pic').addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.querySelector('.user-icon img').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
  
  });
  
  