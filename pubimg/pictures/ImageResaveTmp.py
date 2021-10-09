#!/usr/bin/python
# -*- coding: utf-8 -*-

#import MySQLdb as mdb

import Image 

import sys, string
import os, os.path



#To avoid virous in images.
class ImageResave:
   ImgList=[".jpg", ".jpeg",".gif",".img", ".png"]
   def walk(self,workdir):     
      #dirs = sorted(os.listdir( workdir ))
      for file in os.listdir( workdir ):    
         pathfile = os.path.join(workdir, file)
         if os.path.isdir(pathfile):
            self.walk(pathfile)
         else:
            ##print pathfile
            fileName, fileExtension = os.path.splitext(pathfile)            
            if not fileExtension in self.ImgList:
               ##print fileName,"---",fileExtension
               continue
			print pathfile, fileName,fileExtension
            try:
               im = Image.open(pathfile)        
               #im.save(fileName+".jpeg", "jpeg") 
               if im.mode != "RGB":
                    im = im.convert("RGB")
               im.save(pathfile, "JPEG") 
            except ValueError:
               print "[error:]", fileName,fileExtension
               
      
   def main(self):
      if len(sys.argv)==1:
         print "Usage: %s ImgDir"%__file__
         return
      ret = raw_input("re-save img files in dir " + sys.argv[1] ); 
      self.walk(sys.argv[1])

      
if "__main__" == __name__ :   
   print sys.argv
   print "getcwd=",os.getcwd()
   ir = ImageResave()
   ir.main()


    
