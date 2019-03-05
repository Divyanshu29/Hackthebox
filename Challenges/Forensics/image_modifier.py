from PIL import Image
if __name__=="__main__":
	img=Image.open('file2.png')
	in_pixels = list(img.getdata())
	out_pixels = list()
	for i in range(len(in_pixels)):
		r=in_pixels[i][0]
		g=in_pixels[i][1]
		b=in_pixels[i][2]
		if r!=0 or r!=255:
			r=150-r
		if g!=0 or g!=255:
			g=150-g
		if b!=0 or b!=255:
			b=150-b
		out_pixels.append((r,g,b))
	out_img=Image.new(img.mode,img.size)
	out_img.putdata(out_pixels)
	out_img.save("file1.png","PNG")
