#!/usr/bin/env python3
import os
import re

code_comment_pattern = re.compile(r'^\s*//\s*[\w\$\(\)\[\]{};:\-\>\"\'@]')
use_comment_pattern = re.compile(r'^\s*//use\s+App')

def clean_file(filepath):
    """Remove commented code lines from a file"""
    with open(filepath, 'r') as f:
        lines = f.readlines()

    cleaned = [line for line in lines if not (code_comment_pattern.search(line) or use_comment_pattern.search(line))]

    if len(cleaned) < len(lines):
        with open(filepath, 'w') as f:
            f.writelines(cleaned)
        return len(lines) - len(cleaned)
    return 0

total = 0
count = 0
for root, dirs, files in os.walk('app/Http/Controllers'):
    for file in files:
        if file.endswith('.php'):
            path = os.path.join(root, file)
            removed = clean_file(path)
            if removed > 0:
                total += removed
                count += 1
                print(f"{path}: {removed} lines")

print(f'\n✅ Files cleaned: {count}')
print(f'✅ Total lines removed: {total}')
