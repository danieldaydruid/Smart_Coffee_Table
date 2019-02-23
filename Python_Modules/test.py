from roku import Roku
import os
from Tkinter import *

os.system("ifconfig >> output.txt")
file = open("output.txt", "r")
lines = file.readlines()
file.close()

for line in lines:
    if("192" in line):
        ip_address = line[line.find("inet")+4:line.find("netmask")].strip()
        netmask    = line[line.find("netmask")+7:line.find("broadcast")].strip()

os.system("sudo nmap -sn 192.168.0.0/24 >> new_output.txt") #Pipes Local Area search results to file for Python script analysis
file = open("new_output.txt", "r")
lines = file.readlines()
file.close()

line_count = 0

for line in lines:
    line_count += 1
    if("Liteon" in line):
        line = lines[line_count - 3]
        device_access_ip_address = line[line.find("for")+3:].strip()
        print(device_access_ip_address)

#Just a home fix, the IP search is bugging out for some reason. NPM keeps returning 2 separate Liteon Technology devices
#device_access_ip_address = "192.168.0.13"
main = Tk()

def leftKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/left")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/left"

def rightKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/right")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/right"

def selectKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/select")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/select"

def escKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/home")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/home"

def upKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/up")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/up"

def downKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/down")
    print "curl -d '' http://" + device_access_ip_address + ":8060/keypress/down"

def power_Key(event):
    os.system("python -c '"'from roku import Roku; Roku("'"" + device_access_ip_address + ""'")._post("'"/keypress/Power"'")'"'")
	print( "python -c '"'from roku import Roku; Roku("'""+device_access_ip_address+""'")._post("'"/keypress/Power"'")'"'" )

def volume_up_Key(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/VolumeMute")
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/VolumeUp")

def volume_down_Key(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/VolumeMute")
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/VolumeDown")
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/VolumeMute")

def aKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_a")

def bKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_b")

def cKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_c")

def dKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_d")

def eKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_e")

def fKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_f")

def gKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_g")

def hKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_h")

def iKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_i")

def jKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_j")

def kKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_k")

def lKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_l")

def mKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_m")

def nKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_n")

def oKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_o")

def pKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_p")

def qKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_q")

def rKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_r")

def sKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_s")

def tKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_t")

def uKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_u")

def vKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_v")

def wKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_w")

def xKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_x")

def yKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_y")

def zKey(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_z")

def space_Key(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Lit_%20")

def backspace_Key(event):
    os.system("curl -d '' http://" + device_access_ip_address + ":8060/keypress/Backspace")
# Key binds
frame = Frame(main, width=100, height=100)
main.bind('<Left>', leftKey)
main.bind('<Right>', rightKey)
main.bind('<Return>', selectKey)
main.bind('<Escape>', escKey)
main.bind('<Up>', upKey)
main.bind('<Down>', downKey)
main.bind('<Tab>', power_Key)
main.bind('<KP_Add>', volume_up_Key)
main.bind('<KP_Subtract>', volume_down_Key)
### Function keystroke bindings list
main.bind('<a>', aKey)
main.bind('<b>', bKey)
main.bind('<c>', cKey)
main.bind('<d>', dKey)
main.bind('<e>', eKey)
main.bind('<f>', fKey)
main.bind('<g>', gKey)
main.bind('<h>', hKey)
main.bind('<i>', iKey)
main.bind('<j>', jKey)
main.bind('<k>', kKey)
main.bind('<l>', lKey)
main.bind('<m>', mKey)
main.bind('<n>', nKey)
main.bind('<o>', oKey)
main.bind('<p>', pKey)
main.bind('<q>', qKey)
main.bind('<r>', rKey)
main.bind('<s>', sKey)
main.bind('<t>', tKey)
main.bind('<u>', uKey)
main.bind('<v>', vKey)
main.bind('<w>', wKey)
main.bind('<x>', xKey)
main.bind('<y>', yKey)
main.bind('<z>', zKey)
main.bind('<space>', space_Key)
main.bind('<BackSpace>', backspace_Key)
### End function keystroke bindings list
frame.pack()
main.mainloop()
os.system("rm output.txt")
os.system("rm new_output.txt")
