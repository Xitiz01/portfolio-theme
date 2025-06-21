# 🎨 My Portfolio - Modern WordPress Theme

A **lightweight**, **customizable**, and **feature-rich** WordPress portfolio theme designed for developers, designers, freelancers, and creatives. Built with modern web standards and WordPress best practices.

![Portfolio Theme Preview](https://github.com/user-attachments/assets/af859aea-acb9-4ed5-a23d-90cf706566cf)


## ✨ Key Features

### 🎯 **Core Features**
- 🧩 **Advanced Customizer Integration** – Complete control over content, colors, and layout
- ⚡ **Lightweight & Fast** – Optimized for performance without unnecessary bloat
- 🎨 **Modern Design** – Clean, minimal aesthetic with geometric accents
- 📱 **Fully Responsive** – Perfect on all devices and screen sizes
- 🔒 **WordPress Standards** – Follows WordPress coding standards and security best practices
- 🚀 **SEO Optimized** – Built with search engine optimization in mind

### 🛠️ **Custom Post Types & Meta**
- 📂 **Projects Custom Post Type** – Showcase your work with rich metadata
- 🖼️ **Project Image Management** – Easy image upload and management
- 🔗 **Project Links** – Live demo and GitHub repository links
- 🏷️ **Tech Stack Tags** – Display technologies used in each project
- 📝 **Project Descriptions** – Detailed project information

### 🎨 **Customizer Controls**

#### **Home Page Sections**
- **Hero Section**
  - Custom title with HTML support
  - Subtitle with rich text
  - Call-to-action buttons
  - Download CV functionality
  - Hero image upload
  - Status indicator

- **Quote Section**
  - Custom quote text
  - Quote author attribution

- **Projects Section**
  - Section title customization
  - Project selection via repeater
  - Button text and link customization
  - Dynamic project display

- **Skills Section**
  - Skills title and button customization
  - Five skill categories:
    - Languages
    - Databases
    - Tools
    - Other Technologies
    - Frameworks
  - Textarea support for multiple skills

- **About Me Section**
  - Section title and intro text
  - Two-paragraph description support
  - About me image upload
  - Button text and link customization

- **Contacts Section**
  - Section title and description
  - Button text and link customization
  - Integration with contact options

#### **Global Settings**
- **Color Customization**
  - Primary color picker
  - Accent color picker
- **Layout Options**
  - Container width customization
- **Sidebar Social Links**
  - GitHub URL
  - Dribbble URL
  - Portfolio/Key URL

### 🔧 **Advanced Features**

#### **Custom SVG Icons**
Built-in SVG icons for social media and platforms:
- GitHub, Discord, LinkedIn, Instagram
- X (Twitter), Email, WhatsApp
- Upwork, Fiverr, Buy Me a Coffee
- Wise (TransferWise), User icon

#### **Theme Settings Pages**
- **About Options** – About page customization
- **Contacts Options** – Contact information management
- **Projects Options** – Project display settings

#### **Admin Functions**
- Custom project meta boxes
- Image upload functionality
- Project details management
- Nonce security implementation

#### **Template Functions**
- SVG icon generation functions
- Project details callback
- Media uploader integration
- Security and sanitization

### 📁 **Project Structure**

```
my-portfolio/
├── assets/
│   ├── css/
│   │   ├── style.css              # Main stylesheet (25KB)
│   │   └── customizer-repeater.css # Customizer styles
│   ├── js/
│   │   ├── customizer.js          # Live preview functionality
│   │   ├── customizer-repeater.js # Repeater field handling
│   │   └── admin-repeater.js      # Admin repeater functionality
│   └── img/                       # Theme images
├── inc/
│   ├── customizer/
│   │   ├── customizer.php         # Global customizer settings
│   │   ├── home.php              # Home page customizer (507 lines)
│   │   └── footer.php            # Footer customizer settings
│   ├── themesettings/
│   │   ├── about-options.php     # About page options
│   │   ├── contacts-options.php  # Contact page options
│   │   └── projects-options.php  # Projects page options
│   ├── template-function.php     # Template functions (217 lines)
│   ├── helper-function.php       # Helper functions
│   └── admin-functions.php       # Admin functionality
├── front-page.php                # Home page template (326 lines)
├── page-about.php               # About page template
├── page-contacts.php            # Contact page template
├── page-projects.php            # Projects page template
├── functions.php                # Theme initialization
├── header.php                   # Header template
├── footer.php                   # Footer template
├── index.php                    # Main template
└── style.css                    # Theme header
```

## 🚀 **Getting Started**

### **Installation**

1. **Download the Theme**
   ```bash
   git clone https://github.com/Xitiz01/portfolio-theme.git
   ```

2. **Upload to WordPress**
   - Upload the theme folder to `/wp-content/themes/`
   - Or use WordPress admin: Appearance → Themes → Add New → Upload Theme

3. **Activate the Theme**
   - Go to Appearance → Themes
   - Click "Activate" on "My Portfolio"

4. **Customize Your Site**
   - Go to Appearance → Customize
   - Start configuring your portfolio content

### **Initial Setup**

1. **Configure Home Page**
   - Set up hero section content
   - Add your skills and technologies
   - Upload project images and details
   - Customize about me section

2. **Add Projects**
   - Go to Projects → Add New
   - Upload project images
   - Add tech stack and descriptions
   - Include live demo and GitHub links

3. **Set Up Contact Information**
   - Configure contact page options
   - Add social media links
   - Set up support platforms (Upwork, Fiverr, etc.)

4. **Customize Colors & Layout**
   - Adjust primary and accent colors
   - Set container width
   - Configure sidebar social links

## 🎨 **Customization Guide**

### **Home Page Customization**
The theme provides extensive customization options through the WordPress Customizer:

- **Hero Section**: Title, subtitle, buttons, image, and status
- **Projects**: Select and display featured projects
- **Skills**: Organize skills into categories
- **About Me**: Personal information and image
- **Contacts**: Contact information and social links

### **Project Management**
Each project can include:
- Featured image
- Tech stack information
- Project description
- Live demo URL
- GitHub repository link

### **Color Scheme**
- Primary color for main elements
- Accent color for highlights and buttons
- Automatic contrast optimization

## 🔧 **Development**

### **WordPress Standards**
- Follows WordPress coding standards
- Proper sanitization and escaping
- Security best practices
- Accessibility considerations

### **File Organization**
- Modular structure for easy maintenance
- Separated concerns (customizer, admin, templates)
- Clear naming conventions
- Comprehensive documentation

### **Performance**
- Optimized CSS and JavaScript
- Efficient database queries
- Minimal external dependencies
- Fast loading times

## 📱 **Responsive Design**

The theme is fully responsive and optimized for:
- Desktop computers
- Tablets
- Mobile phones
- Various screen orientations

## 🔒 **Security Features**

- Input sanitization
- Output escaping
- Nonce verification
- Capability checks
- SQL injection prevention

## 🌟 **Browser Support**

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## 📄 **License**

This theme is open-sourced under the **MIT License**.

## 🤝 **Contributing**

We welcome contributions! Please feel free to:
- Fork the repository
- Create feature branches
- Submit pull requests
- Report issues
- Suggest improvements

## 📞 **Support**

For support and questions:
- Create an issue on GitHub
- Check the documentation
- Review the code comments

---

**Crafted with ❤️ by [Xitiz01](https://github.com/Xitiz01)**

*Built for developers, by developers.* 