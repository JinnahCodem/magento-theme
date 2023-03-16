# Magento-Custom-Theme

## Create Custom Header

To create a Custom header in frontend, Please follow the below steps

### 1.Create Block

Follow below settings,

Enable Block -> Yes,
Block Title -> Custom Header,
Identifier -> custom-header,
Store View -> All Store Views

#### Edit with Page Builder (HTML Code)

```
<div class="custom-header">
    <div class="custom-header-list1"><i class="fa fa-shopping-cart" aria-hidden="true"></i>FREE SHIPPING ON ALL ORDERS</div>
    <div class="custom-header-list2"><i class="fa fa-money-bill" aria-hidden="true"></i>100% MONEY BACK GUARANTEE</div>
    <div class="custom-header-list3"><i class="fa fa-clock" aria-hidden="true"></i>ONLINE SUPPORT 24/7</div>
</div>
```

### 2. Create Widget

Follow below settings,

#### Storefront Properties

Type -> CMS Static Block,
Design Package/Theme -> Custom Theme,
Widget Title -> Custom Header Widget
Assign to Store Views -> All Store Views,
Sort Order -> 0,
Display On -> All Pages,
Container -> PageTop

#### Widget Option

Block -> Custom Header

## Create Custom Blog Post

### 1.Create Block

Follow below settings,

Enable Block -> Yes,
Block Title -> Custom Blog Post,
Identifier -> custom_blog_post,
Store View -> All Store Views

#### Edit with Page Builder (HTML Code)

(Please use the image attached in Images section)

```
<div class="blog-post">
    <div class="post-heading">
        <h1>FROM THE BLOG</h1>
    </div>
    <div class="post-content">
        <div class="post-content1">
            <img class="blog-post-image" src="{{media url=wysiwyg/custom_blog/blog-post1.png}}" alt="blog-post-image1" />
            <h3>CURABITUR LIGULASAPIEN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus sed odio eu turpis faucibus condimentum vel sed odio. 
                Curabitur et gravida mauris.</p>
        </div>
        <div class="post-content2">
            <img class="blog-post-image" src="{{media url=wysiwyg/custom_blog/blog-post2.png}}" alt="blog-post-image2" />
            <h3>CURABITUR LIGULASAPIEN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus sed odio eu turpis faucibus condimentum vel sed odio.
                Curabitur et gravida mauris.</p>
        </div>
        <div class="post-content3">
            <img class="blog-post-image" src="{{media url=wysiwyg/custom_blog/blog-post3.png}}" alt="blog-post-image3" />
            <h3>CURABITUR LIGULASAPIEN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus sed odio eu turpis faucibus condimentum vel sed odio.
                Curabitur et gravida mauris.</p>
        </div>
    </div>
</div>
```

### 2. Create Widget

Follow below settings,

#### Storefront Properties

Type -> CMS Static Block,
Design Package/Theme -> Custom Theme,
Widget Title -> Custom Blog Post
Assign to Store Views -> All Store Views,
Sort Order -> 0,
Display On -> Specified Page,
Page -> Catalog Category,
Container -> Before Page Footer

#### Widget Option

Block -> Custom Blog Post

## Create Social Icons

### 1.Create Block

Follow below settings,

Enable Block -> Yes,
Block Title -> Custom Social Icons,
Identifier -> custom_social_icons,
Store View -> All Store Views

#### Edit with Page Builder (HTML Code)

```
<div class="custom-social-icons">
    <ul>
        <li><i class="fab fa-facebook"></i></li>
        <li><i class="fab fa-instagram"></i></li>
        <li><i class="fab fa-twitter"></i></li>
        <li><i class="fab fa-youtube-square"></i></li>
    </ul>
</div>
```


## Create Custom Footer

### 1.Create Block

Follow below settings,

Enable Block -> Yes,
Block Title -> Custom Footer,
Identifier -> custom_footer,
Store View -> All Store Views

#### Edit with Page Builder (HTML Code)
(Please use the image attached in Images section)

```
<div class="footer-menu">
    <div class="footer-menu-left">
        <img class="footer-menu-left-image" src="{{media url=wysiwyg/custom_footer/Fashion_Store_Logo.png}}" alt="footer-logo-image" />
        <p class="footer-menu-left-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="footer-menu-right">
        <div class="footer-menu-right-top">
            <div class="footer-menu-right-top-label"><h3>SIGN UP FOR OUR NEWSLETTER!</h3></div>
            {{block class="Magento\Framework\View\Element\Template" template="Magento_Newsletter::subscribe.phtml"}}
        </div>
        <div class="footer-menu-right-bottom">
            <div class="footer-menu-right-bottom-information">
                <h3>INFORMATION</h3>
                <ul>
                    <li><i class="fa fa-caret-right"></i><a href="#">Careers</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Investor Relations</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Press Releases</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Shop with Points</a></li>
                </ul>
            </div>
            <div class="footer-menu-right-bottom-customer">
                <h3>CUSTOMER CARE</h3>
                <ul>
                    <li><i class="fa fa-caret-right"></i><a href="#">Returns</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Shipping Info</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Gift Cards</a></li>
                    <li><i class="fa fa-caret-right"></i><a href="#">Size Guide</a></li>
                </ul>
            </div>
            <address class="footer-menu-right-bottom-storeinfo">
                <h3>STORE INFORMATION</h3>
                <ul>
                    <li><i class="fa fa-location-arrow"></i><span>address : </span>lorem ipsum dolor sit amet, consectetur.</li>
                    <li><i class="fa fa-envelope"></i><span>email : </span><a href="mailto:demo@posthemes.com">demo@posthemes.com</a></li>
                    <li><i class="fa fa-phone-volume"></i><span>phone : </span><a href="tel:0987.654.321">0987.654.321</a></li>
                </ul>
            </address>
        </div>
    </div>
</div>
```

### 2. Create Widget

Follow below settings,

#### Storefront Properties

Type -> CMS Static Block,
Design Package/Theme -> Custom Theme,
Widget Title -> Custom Footer Widget
Assign to Store Views -> All Store Views,
Sort Order -> 0,
Display On -> All Pages,
Container -> PageFooter

#### Widget Option

Block -> Custom Footer






