import re
import sys

def modify_delhi_page():
    path = r'c:\Users\amity\OneDrive\Desktop\HOUSEHOLD\packers-and-movers-delhi.html'
    try:
        with open(path, 'r', encoding='utf-8') as f:
            content = f.read()
            
        content = re.sub(r'<title>.*?</title>', '<title>Best Packers and Movers in Delhi | Household Packers</title>', content)
        content = re.sub(r'<meta name="description" content=".*?">', '<meta name="description" content="Looking for trusted packers and movers in Delhi? Get affordable and verified home shifting, office relocation, and vehicle transport services in Delhi NCR.">', content)
        content = re.sub(r'<h1>Relocate With Confidence</h1>', '<h1>Best Packers and Movers in Delhi</h1>', content)
        content = re.sub(r'<p>India\'s most trusted platform for verifying, comparing, and booking professional packers and movers.</p>', '<p>Top-rated home shifting and relocation services in Delhi NCR. 100% Verified Partners.</p>', content)
        content = re.sub(r'India\'s Trusted Relocation Comparison Platform', 'Delhi\'s Trusted Relocation Comparison Platform', content)
        content = re.sub(r'across India', 'across Delhi NCR', content)
        content = re.sub(r'Indian families', 'Delhi families', content)
        content = re.sub(r'Indian customers', 'Delhi customers', content)
        
        with open(path, 'w', encoding='utf-8') as f:
            f.write(content)
        print('Successfully updated delhi page')
    except Exception as e:
        print('Error updating delhi page:', e)

def modify_index_page():
    path = r'c:\Users\amity\OneDrive\Desktop\HOUSEHOLD\index.html'
    try:
        with open(path, 'r', encoding='utf-8') as f:
            content = f.read()
            
        content = content.replace('<a href="#" class="city-pill">Packers and Movers in Delhi</a>', '<a href="packers-and-movers-delhi.html" class="city-pill">Packers and Movers in Delhi</a>')
        
        with open(path, 'w', encoding='utf-8') as f:
            f.write(content)
        print('Successfully updated index page')
    except Exception as e:
        print('Error updating index page:', e)

modify_delhi_page()
modify_index_page()
