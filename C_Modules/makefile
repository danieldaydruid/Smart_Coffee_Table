
all: program


.PHONY: how
	
first:
	echo doing $@
second:
	echo doing $@
third:
	echo doing $@
how: first second third
	echo $@
	echo $^
	echo $<

# target: dependency dependency
#	command
#	command
#
# $@ - make target "program"
# $^ - make dependencies "obj/project_1.o obj/Ready_Queue.o obj/PCB_Table.o obj/PCB.o"
# $< - make first dependency "obj/project_1.o"
program: main.o
	gcc $^ -o $@
