#!/usr/bin/env python
# coding: utf-8
# Transliteration 
from unicodedata import normalize

oswaltsubs = u"""
^h
ʰ

$
š

s'
s\u0313

7
ṭ

?
ʔ

i'
í

u'
ú

o'
ó

e'
é

ṭ'
ṭ\u0313

t'
t\u0313

q'
q\u0313

c'
c\u0313

k'
k\u0313

p'
p\u0313

q'
q\u0313

a'
á

:
·

.-
 .̄

.^
 .̂

▓  
◻

O
°

"""

oswaltsubs = normalize('NFD', oswaltsubs)

# ʔ./
# ?./"""

oswaltsubs = oswaltsubs.strip()

oswaltsubs = [pair.split('\n') for pair in oswaltsubs.strip().split("\n\n")]

oswaltsubs = [(before.strip(), after.strip()) for before, after in oswaltsubs]

def apply_transliteration(match):
  return oswaltify(match.group(0))

def convert(text):
  text = inside_slashesRE.sub(apply_transliteration, oswalt)
  text = inside_bracesRE.sub(apply_transliteration, oswalt)
  return text

def adjust_circumflexes(word):
  capped = []
  for c in u"Vraeiou": 
    capped.append( (c + '^', c.lower() + u"\u0302" )  )
    #   COMBINING CIRCUMFLEX ACCENT (U+0302)
    capped.append( (c + '^', c.lower() + u"̂") ) 
  #for b, a in capped: 
  #  out = "%s%s" % (a,b)
  #  print out.encode('utf-8')
  for before, after in capped: 
    word = word.replace(before, after)
  return word

def oswaltify(s):
  s = adjust_circumflexes(s)
  for before, after in oswaltsubs:
    s = s.replace(before,after)
  s = s.replace('/','')
  return s

def transliterate_example(example):
  inside_slashesRE = re.compile('/([^ ][^\/]+[^ ])/')
  def oswaltify_in_slashes(matchobj): 
    slashed = matchobj.group(0)
    return oswaltify(slashed)
  return inside_slashesRE.sub(oswaltify_in_slashes, example)

if __name__ == "__main__":
  from fileinput import input
  content = ''.join([line for line in input()])
  content = content.decode('utf-8')
  print oswaltify(content).encode('utf-8')
