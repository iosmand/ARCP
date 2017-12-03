import sys
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

help = sys.argv

pin = [14, 14, 15, 18, 17, 27, 22, 23, 24]

pinIn = 1
mode = help[1]

if int(mode) == 0:
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , True)
	print "all pins switched on"
	

if int(mode) == 1:
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	pinIn += 1
	GPIO.setup(pin[int(pinIn)] , GPIO.OUT)
	GPIO.output(pin[int(pinIn)] , False)
	print "all pins switched off"

